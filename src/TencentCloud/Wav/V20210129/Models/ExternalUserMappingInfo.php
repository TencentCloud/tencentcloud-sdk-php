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
 * 外部联系人映射信息
 *
 * @method string getCorpExternalUserId() 获取企业主体对应的外部联系人userId
 * @method void setCorpExternalUserId(string $CorpExternalUserId) 设置企业主体对应的外部联系人userId
 * @method string getExternalUserId() 获取乐销车应用主体对应的外部联系人, 当不存在好友关系时，该字段值为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalUserId(string $ExternalUserId) 设置乐销车应用主体对应的外部联系人, 当不存在好友关系时，该字段值为空
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExternalUserMappingInfo extends AbstractModel
{
    /**
     * @var string 企业主体对应的外部联系人userId
     */
    public $CorpExternalUserId;

    /**
     * @var string 乐销车应用主体对应的外部联系人, 当不存在好友关系时，该字段值为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalUserId;

    /**
     * @param string $CorpExternalUserId 企业主体对应的外部联系人userId
     * @param string $ExternalUserId 乐销车应用主体对应的外部联系人, 当不存在好友关系时，该字段值为空
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
        if (array_key_exists("CorpExternalUserId",$param) and $param["CorpExternalUserId"] !== null) {
            $this->CorpExternalUserId = $param["CorpExternalUserId"];
        }

        if (array_key_exists("ExternalUserId",$param) and $param["ExternalUserId"] !== null) {
            $this->ExternalUserId = $param["ExternalUserId"];
        }
    }
}
