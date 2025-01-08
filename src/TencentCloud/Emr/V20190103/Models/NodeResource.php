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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规格管理，规格类型描述
 *
 * @method integer getResourceConfigId() 获取配置Id
 * @method void setResourceConfigId(integer $ResourceConfigId) 设置配置Id
 * @method Resource getResource() 获取Resource
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResource(Resource $Resource) 设置Resource
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getIsDefault() 获取是否默认配置,DEFAULT,BACKUP
 * @method void setIsDefault(string $IsDefault) 设置是否默认配置,DEFAULT,BACKUP
 * @method integer getMaxResourceNum() 获取该类型剩余
 * @method void setMaxResourceNum(integer $MaxResourceNum) 设置该类型剩余
 * @method array getPrepaidUnderwritePeriods() 获取支持的包销时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrepaidUnderwritePeriods(array $PrepaidUnderwritePeriods) 设置支持的包销时长
注意：此字段可能返回 null，表示取不到有效值。
 */
class NodeResource extends AbstractModel
{
    /**
     * @var integer 配置Id
     */
    public $ResourceConfigId;

    /**
     * @var Resource Resource
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resource;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 是否默认配置,DEFAULT,BACKUP
     */
    public $IsDefault;

    /**
     * @var integer 该类型剩余
     */
    public $MaxResourceNum;

    /**
     * @var array 支持的包销时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrepaidUnderwritePeriods;

    /**
     * @param integer $ResourceConfigId 配置Id
     * @param Resource $Resource Resource
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param string $IsDefault 是否默认配置,DEFAULT,BACKUP
     * @param integer $MaxResourceNum 该类型剩余
     * @param array $PrepaidUnderwritePeriods 支持的包销时长
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
        if (array_key_exists("ResourceConfigId",$param) and $param["ResourceConfigId"] !== null) {
            $this->ResourceConfigId = $param["ResourceConfigId"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new Resource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("MaxResourceNum",$param) and $param["MaxResourceNum"] !== null) {
            $this->MaxResourceNum = $param["MaxResourceNum"];
        }

        if (array_key_exists("PrepaidUnderwritePeriods",$param) and $param["PrepaidUnderwritePeriods"] !== null) {
            $this->PrepaidUnderwritePeriods = $param["PrepaidUnderwritePeriods"];
        }
    }
}
