<?php
declare(strict_types=1);

namespace Plaisio\Lock;

/**
 * Interface for factories for creating entity locks.
 */
interface EntityLockFactory
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Acquires a lock on a database entity and returns the object holding the lock.
   *
   * @param int $nameId   The ID of the name of the entity lock.
   * @param int $entityId The ID of the entity.
   *
   * @return EntityLock
   */
  public function create(int $nameId, int $entityId): EntityLock;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
