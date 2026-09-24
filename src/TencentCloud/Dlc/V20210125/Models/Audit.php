<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * tcc 审计信息
 *
 * @method string getCreator() 获取<p>创建者</p>
 * @method void setCreator(string $Creator) 设置<p>创建者</p>
 * @method string getLastModifier() 获取<p>最后修改者</p>
 * @method void setLastModifier(string $LastModifier) 设置<p>最后修改者</p>
 * @method integer getCreatedAt() 获取<p>创建时间戳</p>
 * @method void setCreatedAt(integer $CreatedAt) 设置<p>创建时间戳</p>
 * @method integer getLastModifiedAt() 获取<p>最后修改时间戳</p>
 * @method void setLastModifiedAt(integer $LastModifiedAt) 设置<p>最后修改时间戳</p>
 * @method string getLastModifiedTime() 获取<p>最后修改时间（已废弃）</p><p>参数格式：2024-11-01 11:01:01</p>
 * @method void setLastModifiedTime(string $LastModifiedTime) 设置<p>最后修改时间（已废弃）</p><p>参数格式：2024-11-01 11:01:01</p>
 * @method string getCreatedTime() 获取<p>创建时间（已废弃）</p><p>参数格式：2024-11-01 11:01:01</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间（已废弃）</p><p>参数格式：2024-11-01 11:01:01</p>
 */
class Audit extends AbstractModel
{
    /**
     * @var string <p>创建者</p>
     */
    public $Creator;

    /**
     * @var string <p>最后修改者</p>
     */
    public $LastModifier;

    /**
     * @var integer <p>创建时间戳</p>
     */
    public $CreatedAt;

    /**
     * @var integer <p>最后修改时间戳</p>
     */
    public $LastModifiedAt;

    /**
     * @var string <p>最后修改时间（已废弃）</p><p>参数格式：2024-11-01 11:01:01</p>
     */
    public $LastModifiedTime;

    /**
     * @var string <p>创建时间（已废弃）</p><p>参数格式：2024-11-01 11:01:01</p>
     */
    public $CreatedTime;

    /**
     * @param string $Creator <p>创建者</p>
     * @param string $LastModifier <p>最后修改者</p>
     * @param integer $CreatedAt <p>创建时间戳</p>
     * @param integer $LastModifiedAt <p>最后修改时间戳</p>
     * @param string $LastModifiedTime <p>最后修改时间（已废弃）</p><p>参数格式：2024-11-01 11:01:01</p>
     * @param string $CreatedTime <p>创建时间（已废弃）</p><p>参数格式：2024-11-01 11:01:01</p>
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
        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("LastModifier",$param) and $param["LastModifier"] !== null) {
            $this->LastModifier = $param["LastModifier"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("LastModifiedAt",$param) and $param["LastModifiedAt"] !== null) {
            $this->LastModifiedAt = $param["LastModifiedAt"];
        }

        if (array_key_exists("LastModifiedTime",$param) and $param["LastModifiedTime"] !== null) {
            $this->LastModifiedTime = $param["LastModifiedTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
