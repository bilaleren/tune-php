<?php declare(strict_types=1);

namespace Tune\Tests;

use ReflectionClass;
use ReflectionException;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{

    /**
     * @param $classes
     */
    protected function assertClassesExists($classes): void
    {
        if (!is_array($classes)) {
            $classes = [$classes];
        }

        foreach ($classes as $class) {
            $this->assertTrue(class_exists($class), "Class [$class] not found.");
        }
    }

    /**
     * @param string $class
     * @return array
     * @throws ReflectionException
     */
    protected function getClassUsableMethods(string $class): array
    {
        $reflection = new ReflectionClass($class);

        preg_match_all('#@method\s[a-zA-Z].*\s([a-zA-Z_]+.*)\(.*\)#', $reflection->getDocComment(), $matches);

        return $matches[1] ?? [];
    }

    /**
     * @param string $className
     * @param string $namespace
     * @throws ReflectionException
     */
    protected function callClassesMethods(string $className, string $namespace): void
    {
        $classes = array_map(function (string $class) use ($namespace) {
            $class = ucfirst($class);
            return "Tune\Controllers\\$namespace\\$class";
        }, $this->getClassUsableMethods($className));

        $this->assertClassesExists($classes);
    }

}