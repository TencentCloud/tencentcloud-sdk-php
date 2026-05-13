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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规格管理，规格类型描述
 *
 * @method integer getResourceConfigId() 获取<p>配置Id</p>
 * @method void setResourceConfigId(integer $ResourceConfigId) 设置<p>配置Id</p>
 * @method Resource getResource() 获取<p>Resource</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResource(Resource $Resource) 设置<p>Resource</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method string getIsDefault() 获取<p>是否默认配置,DEFAULT,BACKUP</p>
 * @method void setIsDefault(string $IsDefault) 设置<p>是否默认配置,DEFAULT,BACKUP</p>
 * @method integer getMaxResourceNum() 获取<p>该类型剩余</p>
 * @method void setMaxResourceNum(integer $MaxResourceNum) 设置<p>该类型剩余</p>
 * @method array getPrepaidUnderwritePeriods() 获取<p>支持的包销时长</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrepaidUnderwritePeriods(array $PrepaidUnderwritePeriods) 设置<p>支持的包销时长</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQuotaNum() 获取<p>配额数量</p>
 * @method void setQuotaNum(integer $QuotaNum) 设置<p>配额数量</p>
 * @method string getQuotaUnit() 获取<p>配额单位</p>
 * @method void setQuotaUnit(string $QuotaUnit) 设置<p>配额单位</p>
 */
class NodeResource extends AbstractModel
{
    /**
     * @var integer <p>配置Id</p>
     */
    public $ResourceConfigId;

    /**
     * @var Resource <p>Resource</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resource;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>是否默认配置,DEFAULT,BACKUP</p>
     */
    public $IsDefault;

    /**
     * @var integer <p>该类型剩余</p>
     */
    public $MaxResourceNum;

    /**
     * @var array <p>支持的包销时长</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrepaidUnderwritePeriods;

    /**
     * @var integer <p>配额数量</p>
     */
    public $QuotaNum;

    /**
     * @var string <p>配额单位</p>
     */
    public $QuotaUnit;

    /**
     * @param integer $ResourceConfigId <p>配置Id</p>
     * @param Resource $Resource <p>Resource</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param string $IsDefault <p>是否默认配置,DEFAULT,BACKUP</p>
     * @param integer $MaxResourceNum <p>该类型剩余</p>
     * @param array $PrepaidUnderwritePeriods <p>支持的包销时长</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QuotaNum <p>配额数量</p>
     * @param string $QuotaUnit <p>配额单位</p>
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

        if (array_key_exists("QuotaNum",$param) and $param["QuotaNum"] !== null) {
            $this->QuotaNum = $param["QuotaNum"];
        }

        if (array_key_exists("QuotaUnit",$param) and $param["QuotaUnit"] !== null) {
            $this->QuotaUnit = $param["QuotaUnit"];
        }
    }
}
