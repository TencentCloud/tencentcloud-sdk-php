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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDeliveryStrategy请求参数结构体
 *
 * @method string getName() 获取<p>策略名称</p>
 * @method void setName(string $Name) 设置<p>策略名称</p>
 * @method array getLogTypes() 获取<p>转发日志类型列表 身份安全:&quot;040201000000&quot;,资源访问日志:&quot;040203000000&quot;,客户端操作日志:&quot;040202000000&quot;,终端安全日志:&quot;040205000000&quot;,终端管控日志:&quot;040206000000&quot;,终端合规日志:&quot;040207000000&quot;,license授权日志:&quot;040212000000&quot;</p>
 * @method void setLogTypes(array $LogTypes) 设置<p>转发日志类型列表 身份安全:&quot;040201000000&quot;,资源访问日志:&quot;040203000000&quot;,客户端操作日志:&quot;040202000000&quot;,终端安全日志:&quot;040205000000&quot;,终端管控日志:&quot;040206000000&quot;,终端合规日志:&quot;040207000000&quot;,license授权日志:&quot;040212000000&quot;</p>
 * @method integer getType() 获取<p>转发方式 0:syslog, 2:kafka, 3:http(只支持32位)</p>
 * @method void setType(integer $Type) 设置<p>转发方式 0:syslog, 2:kafka, 3:http(只支持32位)</p>
 * @method integer getConfigId() 获取<p>转发服务器id(只支持32位)</p>
 * @method void setConfigId(integer $ConfigId) 设置<p>转发服务器id(只支持32位)</p>
 * @method string getDescription() 获取<p>转发策略描述</p>
 * @method void setDescription(string $Description) 设置<p>转发策略描述</p>
 * @method boolean getEnabled() 获取<p>是否开启</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否开启</p>
 * @method integer getID() 获取<p>转发策略id 创建时传递 编辑时候无需传递(只支持32位)</p>
 * @method void setID(integer $ID) 设置<p>转发策略id 创建时传递 编辑时候无需传递(只支持32位)</p>
 */
class ModifyDeliveryStrategyRequest extends AbstractModel
{
    /**
     * @var string <p>策略名称</p>
     */
    public $Name;

    /**
     * @var array <p>转发日志类型列表 身份安全:&quot;040201000000&quot;,资源访问日志:&quot;040203000000&quot;,客户端操作日志:&quot;040202000000&quot;,终端安全日志:&quot;040205000000&quot;,终端管控日志:&quot;040206000000&quot;,终端合规日志:&quot;040207000000&quot;,license授权日志:&quot;040212000000&quot;</p>
     */
    public $LogTypes;

    /**
     * @var integer <p>转发方式 0:syslog, 2:kafka, 3:http(只支持32位)</p>
     */
    public $Type;

    /**
     * @var integer <p>转发服务器id(只支持32位)</p>
     */
    public $ConfigId;

    /**
     * @var string <p>转发策略描述</p>
     */
    public $Description;

    /**
     * @var boolean <p>是否开启</p>
     */
    public $Enabled;

    /**
     * @var integer <p>转发策略id 创建时传递 编辑时候无需传递(只支持32位)</p>
     */
    public $ID;

    /**
     * @param string $Name <p>策略名称</p>
     * @param array $LogTypes <p>转发日志类型列表 身份安全:&quot;040201000000&quot;,资源访问日志:&quot;040203000000&quot;,客户端操作日志:&quot;040202000000&quot;,终端安全日志:&quot;040205000000&quot;,终端管控日志:&quot;040206000000&quot;,终端合规日志:&quot;040207000000&quot;,license授权日志:&quot;040212000000&quot;</p>
     * @param integer $Type <p>转发方式 0:syslog, 2:kafka, 3:http(只支持32位)</p>
     * @param integer $ConfigId <p>转发服务器id(只支持32位)</p>
     * @param string $Description <p>转发策略描述</p>
     * @param boolean $Enabled <p>是否开启</p>
     * @param integer $ID <p>转发策略id 创建时传递 编辑时候无需传递(只支持32位)</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("LogTypes",$param) and $param["LogTypes"] !== null) {
            $this->LogTypes = $param["LogTypes"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}
