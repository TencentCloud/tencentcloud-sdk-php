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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户企业标签
 *
 * @method string getGroupName() 获取该客户档案当前已成功关联的企业标签分组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置该客户档案当前已成功关联的企业标签分组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTagName() 获取该客户档案当前已成功关联的企业标签名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagName(string $TagName) 设置该客户档案当前已成功关联的企业标签名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTagId() 获取该客户档案当前已成功关联的企业标签的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagId(string $TagId) 设置该客户档案当前已成功关联的企业标签的id
注意：此字段可能返回 null，表示取不到有效值。
 */
class EnterpriseTag extends AbstractModel
{
    /**
     * @var string 该客户档案当前已成功关联的企业标签分组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var string 该客户档案当前已成功关联的企业标签名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagName;

    /**
     * @var string 该客户档案当前已成功关联的企业标签的id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagId;

    /**
     * @param string $GroupName 该客户档案当前已成功关联的企业标签分组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TagName 该客户档案当前已成功关联的企业标签名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TagId 该客户档案当前已成功关联的企业标签的id
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }

        if (array_key_exists("TagId",$param) and $param["TagId"] !== null) {
            $this->TagId = $param["TagId"];
        }
    }
}
