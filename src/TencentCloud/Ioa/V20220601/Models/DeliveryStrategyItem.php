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
 * 数据
 *
 * @method string getName() 获取<p>策略名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>策略名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取<p>转发方式 0:syslog, 2:kafka, 3:http(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置<p>转发方式 0:syslog, 2:kafka, 3:http(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLogTypes() 获取<p>转发日志类型列表 身份安全:&quot;040201000000&quot;,资源访问日志:&quot;040203000000&quot;,客户端操作日志:&quot;040202000000&quot;,终端安全日志:&quot;040205000000&quot;,终端管控日志:&quot;040206000000&quot;,终端合规日志:&quot;040207000000&quot;,license授权日志:&quot;040212000000&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogTypes(array $LogTypes) 设置<p>转发日志类型列表 身份安全:&quot;040201000000&quot;,资源访问日志:&quot;040203000000&quot;,客户端操作日志:&quot;040202000000&quot;,终端安全日志:&quot;040205000000&quot;,终端管控日志:&quot;040206000000&quot;,终端合规日志:&quot;040207000000&quot;,license授权日志:&quot;040212000000&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigName() 获取<p>转发配置服务器名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigName(string $ConfigName) 设置<p>转发配置服务器名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>策略描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>策略描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getID() 获取<p>转发策略id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(integer $ID) 设置<p>转发策略id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConfigId() 获取<p>转发服务器id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigId(integer $ConfigId) 设置<p>转发服务器id</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeliveryStrategyItem extends AbstractModel
{
    /**
     * @var string <p>策略名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer <p>转发方式 0:syslog, 2:kafka, 3:http(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var array <p>转发日志类型列表 身份安全:&quot;040201000000&quot;,资源访问日志:&quot;040203000000&quot;,客户端操作日志:&quot;040202000000&quot;,终端安全日志:&quot;040205000000&quot;,终端管控日志:&quot;040206000000&quot;,终端合规日志:&quot;040207000000&quot;,license授权日志:&quot;040212000000&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogTypes;

    /**
     * @var string <p>转发配置服务器名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigName;

    /**
     * @var string <p>策略描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer <p>转发策略id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var integer <p>转发服务器id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigId;

    /**
     * @param string $Name <p>策略名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type <p>转发方式 0:syslog, 2:kafka, 3:http(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LogTypes <p>转发日志类型列表 身份安全:&quot;040201000000&quot;,资源访问日志:&quot;040203000000&quot;,客户端操作日志:&quot;040202000000&quot;,终端安全日志:&quot;040205000000&quot;,终端管控日志:&quot;040206000000&quot;,终端合规日志:&quot;040207000000&quot;,license授权日志:&quot;040212000000&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigName <p>转发配置服务器名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>策略描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ID <p>转发策略id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConfigId <p>转发服务器id</p>
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("LogTypes",$param) and $param["LogTypes"] !== null) {
            $this->LogTypes = $param["LogTypes"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }
    }
}
