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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetPolicy返回参数结构体
 *
 * @method string getPolicyName() 获取策略名。
 * @method void setPolicyName(string $PolicyName) 设置策略名。
 * @method string getDescription() 获取策略描述。
 * @method void setDescription(string $Description) 设置策略描述。
 * @method integer getType() 获取1 表示自定义策略，2 表示预设策略。
 * @method void setType(integer $Type) 设置1 表示自定义策略，2 表示预设策略。
 * @method string getAddTime() 获取策略创建时间。
 * @method void setAddTime(string $AddTime) 设置策略创建时间。
 * @method string getUpdateTime() 获取策略最近更新时间。
 * @method void setUpdateTime(string $UpdateTime) 设置策略最近更新时间。
 * @method string getPolicyDocument() 获取策略文档。
 * @method void setPolicyDocument(string $PolicyDocument) 设置策略文档。
 * @method string getPresetAlias() 获取备注。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPresetAlias(string $PresetAlias) 设置备注。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsServiceLinkedRolePolicy() 获取是否是服务相关策略，0代表不是服务相关策略，1代表是服务相关策略。
 * @method void setIsServiceLinkedRolePolicy(integer $IsServiceLinkedRolePolicy) 设置是否是服务相关策略，0代表不是服务相关策略，1代表是服务相关策略。
 * @method array getTags() 获取策略关联的标签列表
 * @method void setTags(array $Tags) 设置策略关联的标签列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetPolicyResponse extends AbstractModel
{
    /**
     * @var string 策略名。
     */
    public $PolicyName;

    /**
     * @var string 策略描述。
     */
    public $Description;

    /**
     * @var integer 1 表示自定义策略，2 表示预设策略。
     */
    public $Type;

    /**
     * @var string 策略创建时间。
     */
    public $AddTime;

    /**
     * @var string 策略最近更新时间。
     */
    public $UpdateTime;

    /**
     * @var string 策略文档。
     */
    public $PolicyDocument;

    /**
     * @var string 备注。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PresetAlias;

    /**
     * @var integer 是否是服务相关策略，0代表不是服务相关策略，1代表是服务相关策略。
     */
    public $IsServiceLinkedRolePolicy;

    /**
     * @var array 策略关联的标签列表
     */
    public $Tags;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $PolicyName 策略名。
     * @param string $Description 策略描述。
     * @param integer $Type 1 表示自定义策略，2 表示预设策略。
     * @param string $AddTime 策略创建时间。
     * @param string $UpdateTime 策略最近更新时间。
     * @param string $PolicyDocument 策略文档。
     * @param string $PresetAlias 备注。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsServiceLinkedRolePolicy 是否是服务相关策略，0代表不是服务相关策略，1代表是服务相关策略。
     * @param array $Tags 策略关联的标签列表
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("PolicyDocument",$param) and $param["PolicyDocument"] !== null) {
            $this->PolicyDocument = $param["PolicyDocument"];
        }

        if (array_key_exists("PresetAlias",$param) and $param["PresetAlias"] !== null) {
            $this->PresetAlias = $param["PresetAlias"];
        }

        if (array_key_exists("IsServiceLinkedRolePolicy",$param) and $param["IsServiceLinkedRolePolicy"] !== null) {
            $this->IsServiceLinkedRolePolicy = $param["IsServiceLinkedRolePolicy"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
