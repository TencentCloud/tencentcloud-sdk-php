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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件备份资源
 *
 * @method string getResourceType() 获取<p>资源类型</p><p>枚举值：</p><ul><li>CVM_AGENT： CVM文件备份</li><li>COS_AGENT： COS备份</li><li>CFS_AGENT： CFS文件备份</li><li>INSTANCE： CVM整机备份</li></ul>
 * @method void setResourceType(string $ResourceType) 设置<p>资源类型</p><p>枚举值：</p><ul><li>CVM_AGENT： CVM文件备份</li><li>COS_AGENT： COS备份</li><li>CFS_AGENT： CFS文件备份</li><li>INSTANCE： CVM整机备份</li></ul>
 * @method array getResourceIds() 获取<p>资源ID</p>
 * @method void setResourceIds(array $ResourceIds) 设置<p>资源ID</p>
 */
class BackupResourceInfo extends AbstractModel
{
    /**
     * @var string <p>资源类型</p><p>枚举值：</p><ul><li>CVM_AGENT： CVM文件备份</li><li>COS_AGENT： COS备份</li><li>CFS_AGENT： CFS文件备份</li><li>INSTANCE： CVM整机备份</li></ul>
     */
    public $ResourceType;

    /**
     * @var array <p>资源ID</p>
     */
    public $ResourceIds;

    /**
     * @param string $ResourceType <p>资源类型</p><p>枚举值：</p><ul><li>CVM_AGENT： CVM文件备份</li><li>COS_AGENT： COS备份</li><li>CFS_AGENT： CFS文件备份</li><li>INSTANCE： CVM整机备份</li></ul>
     * @param array $ResourceIds <p>资源ID</p>
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }
    }
}
