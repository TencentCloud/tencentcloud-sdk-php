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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetUserPermissionBoundary返回参数结构体
 *
 * @method integer getPolicyId() 获取策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyId(integer $PolicyId) 设置策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPolicyName() 获取策略名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyName(string $PolicyName) 设置策略名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPolicyDocument() 获取策略语法
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyDocument(string $PolicyDocument) 设置策略语法
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPolicyType() 获取策略类型：1.自定义策略，2.预设策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyType(integer $PolicyType) 设置策略类型：1.自定义策略，2.预设策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateMode() 获取创建方式：1.按产品功能或项目权限创建，2.按策略语法创建，3.按策略生成器创建，4.按标签授权创建，5.按权限边界规则创建
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateMode(integer $CreateMode) 设置创建方式：1.按产品功能或项目权限创建，2.按策略语法创建，3.按策略生成器创建，4.按标签授权创建，5.按权限边界规则创建
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetUserPermissionBoundaryResponse extends AbstractModel
{
    /**
     * @var integer 策略ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyId;

    /**
     * @var string 策略名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyName;

    /**
     * @var string 策略语法
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyDocument;

    /**
     * @var integer 策略类型：1.自定义策略，2.预设策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyType;

    /**
     * @var integer 创建方式：1.按产品功能或项目权限创建，2.按策略语法创建，3.按策略生成器创建，4.按标签授权创建，5.按权限边界规则创建
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateMode;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $PolicyId 策略ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PolicyName 策略名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PolicyDocument 策略语法
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PolicyType 策略类型：1.自定义策略，2.预设策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateMode 创建方式：1.按产品功能或项目权限创建，2.按策略语法创建，3.按策略生成器创建，4.按标签授权创建，5.按权限边界规则创建
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("PolicyDocument",$param) and $param["PolicyDocument"] !== null) {
            $this->PolicyDocument = $param["PolicyDocument"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("CreateMode",$param) and $param["CreateMode"] !== null) {
            $this->CreateMode = $param["CreateMode"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
