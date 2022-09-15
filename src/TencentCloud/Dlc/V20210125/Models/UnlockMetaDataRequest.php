<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UnlockMetaData请求参数结构体
 *
 * @method integer getLockId() 获取锁ID
 * @method void setLockId(integer $LockId) 设置锁ID
 * @method string getDatasourceConnectionName() 获取数据源名称
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) 设置数据源名称
 */
class UnlockMetaDataRequest extends AbstractModel
{
    /**
     * @var integer 锁ID
     */
    public $LockId;

    /**
     * @var string 数据源名称
     */
    public $DatasourceConnectionName;

    /**
     * @param integer $LockId 锁ID
     * @param string $DatasourceConnectionName 数据源名称
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("LockId",$param) and $param["LockId"] !== null) {
            $this->LockId = $param["LockId"];
        }

        if (array_key_exists("DatasourceConnectionName",$param) and $param["DatasourceConnectionName"] !== null) {
            $this->DatasourceConnectionName = $param["DatasourceConnectionName"];
        }
    }
}
