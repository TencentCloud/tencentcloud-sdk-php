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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 签署链接信息
 *
 * @method string getSignUrl() 获取签署链接，注意该链接有效期为30分钟，同时需要注意保密，不要外泄给无关用户。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSignUrl(string $SignUrl) 设置签署链接，注意该链接有效期为30分钟，同时需要注意保密，不要外泄给无关用户。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproverMobile() 获取签署人手机号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproverMobile(string $ApproverMobile) 设置签署人手机号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproverName() 获取签署人姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproverName(string $ApproverName) 设置签署人姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getApproverType() 获取签署人类型 1-个人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproverType(integer $ApproverType) 设置签署人类型 1-个人
注意：此字段可能返回 null，表示取不到有效值。
 */
class FlowApproverUrlInfo extends AbstractModel
{
    /**
     * @var string 签署链接，注意该链接有效期为30分钟，同时需要注意保密，不要外泄给无关用户。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SignUrl;

    /**
     * @var string 签署人手机号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproverMobile;

    /**
     * @var string 签署人姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproverName;

    /**
     * @var integer 签署人类型 1-个人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproverType;

    /**
     * @param string $SignUrl 签署链接，注意该链接有效期为30分钟，同时需要注意保密，不要外泄给无关用户。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproverMobile 签署人手机号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproverName 签署人姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ApproverType 签署人类型 1-个人
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
        if (array_key_exists("SignUrl",$param) and $param["SignUrl"] !== null) {
            $this->SignUrl = $param["SignUrl"];
        }

        if (array_key_exists("ApproverMobile",$param) and $param["ApproverMobile"] !== null) {
            $this->ApproverMobile = $param["ApproverMobile"];
        }

        if (array_key_exists("ApproverName",$param) and $param["ApproverName"] !== null) {
            $this->ApproverName = $param["ApproverName"];
        }

        if (array_key_exists("ApproverType",$param) and $param["ApproverType"] !== null) {
            $this->ApproverType = $param["ApproverType"];
        }
    }
}
