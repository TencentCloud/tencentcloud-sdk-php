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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 内容标识符。该功能仅白名单开放。
 *
 * @method string getContentId() 获取内容标识符 ID。
 * @method void setContentId(string $ContentId) 设置内容标识符 ID。
 * @method string getDescription() 获取内容标识符描述。
 * @method void setDescription(string $Description) 设置内容标识符描述。
 * @method integer getReferenceCount() 获取被规则引擎引用的次数。
 * @method void setReferenceCount(integer $ReferenceCount) 设置被规则引擎引用的次数。
 * @method string getPlanId() 获取绑定的套餐 ID。
 * @method void setPlanId(string $PlanId) 设置绑定的套餐 ID。
 * @method array getTags() 获取绑定的标签。
 * @method void setTags(array $Tags) 设置绑定的标签。
 * @method string getStatus() 获取内容标识符状态，取值有：
<li> active：已生效； </li>
<li> deleted：已删除。</li>
 * @method void setStatus(string $Status) 设置内容标识符状态，取值有：
<li> active：已生效； </li>
<li> deleted：已删除。</li>
 * @method string getCreatedOn() 获取创建时间，时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
 * @method void setCreatedOn(string $CreatedOn) 设置创建时间，时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
 * @method string getModifiedOn() 获取最新一次更新时间，时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
 * @method void setModifiedOn(string $ModifiedOn) 设置最新一次更新时间，时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
 * @method string getDeletedOn() 获取删除时间，状态非 deleted 时候为空；时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeletedOn(string $DeletedOn) 设置删除时间，状态非 deleted 时候为空；时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ContentIdentifier extends AbstractModel
{
    /**
     * @var string 内容标识符 ID。
     */
    public $ContentId;

    /**
     * @var string 内容标识符描述。
     */
    public $Description;

    /**
     * @var integer 被规则引擎引用的次数。
     */
    public $ReferenceCount;

    /**
     * @var string 绑定的套餐 ID。
     */
    public $PlanId;

    /**
     * @var array 绑定的标签。
     */
    public $Tags;

    /**
     * @var string 内容标识符状态，取值有：
<li> active：已生效； </li>
<li> deleted：已删除。</li>
     */
    public $Status;

    /**
     * @var string 创建时间，时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
     */
    public $CreatedOn;

    /**
     * @var string 最新一次更新时间，时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
     */
    public $ModifiedOn;

    /**
     * @var string 删除时间，状态非 deleted 时候为空；时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeletedOn;

    /**
     * @param string $ContentId 内容标识符 ID。
     * @param string $Description 内容标识符描述。
     * @param integer $ReferenceCount 被规则引擎引用的次数。
     * @param string $PlanId 绑定的套餐 ID。
     * @param array $Tags 绑定的标签。
     * @param string $Status 内容标识符状态，取值有：
<li> active：已生效； </li>
<li> deleted：已删除。</li>
     * @param string $CreatedOn 创建时间，时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
     * @param string $ModifiedOn 最新一次更新时间，时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
     * @param string $DeletedOn 删除时间，状态非 deleted 时候为空；时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
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
        if (array_key_exists("ContentId",$param) and $param["ContentId"] !== null) {
            $this->ContentId = $param["ContentId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ReferenceCount",$param) and $param["ReferenceCount"] !== null) {
            $this->ReferenceCount = $param["ReferenceCount"];
        }

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }

        if (array_key_exists("DeletedOn",$param) and $param["DeletedOn"] !== null) {
            $this->DeletedOn = $param["DeletedOn"];
        }
    }
}
