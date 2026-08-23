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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 仓库镜像受漏洞影响的组件明细列表
 *
 * @method integer getComponentId() 获取<p>组件id</p>
 * @method void setComponentId(integer $ComponentId) 设置<p>组件id</p>
 * @method string getLayerId() 获取<p>镜像层id</p>
 * @method void setLayerId(string $LayerId) 设置<p>镜像层id</p>
 * @method string getName() 获取<p>组件名</p>
 * @method void setName(string $Name) 设置<p>组件名</p>
 * @method string getVersion() 获取<p>组件版本号</p>
 * @method void setVersion(string $Version) 设置<p>组件版本号</p>
 * @method string getFixedVersion() 获取<p>修复漏洞的版本号</p>
 * @method void setFixedVersion(string $FixedVersion) 设置<p>修复漏洞的版本号</p>
 */
class VulAffectedComponent extends AbstractModel
{
    /**
     * @var integer <p>组件id</p>
     */
    public $ComponentId;

    /**
     * @var string <p>镜像层id</p>
     */
    public $LayerId;

    /**
     * @var string <p>组件名</p>
     */
    public $Name;

    /**
     * @var string <p>组件版本号</p>
     */
    public $Version;

    /**
     * @var string <p>修复漏洞的版本号</p>
     */
    public $FixedVersion;

    /**
     * @param integer $ComponentId <p>组件id</p>
     * @param string $LayerId <p>镜像层id</p>
     * @param string $Name <p>组件名</p>
     * @param string $Version <p>组件版本号</p>
     * @param string $FixedVersion <p>修复漏洞的版本号</p>
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
        if (array_key_exists("ComponentId",$param) and $param["ComponentId"] !== null) {
            $this->ComponentId = $param["ComponentId"];
        }

        if (array_key_exists("LayerId",$param) and $param["LayerId"] !== null) {
            $this->LayerId = $param["LayerId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("FixedVersion",$param) and $param["FixedVersion"] !== null) {
            $this->FixedVersion = $param["FixedVersion"];
        }
    }
}
