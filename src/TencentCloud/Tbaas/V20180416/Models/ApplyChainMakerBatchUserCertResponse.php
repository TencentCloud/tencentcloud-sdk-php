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
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyChainMakerBatchUserCert返回参数结构体
 *
 * @method array getSignUserCrtList() 获取成功生成的用户证书的base64编码字符串列表，与SignUserCsrList一一对应
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSignUserCrtList(array $SignUserCrtList) 设置成功生成的用户证书的base64编码字符串列表，与SignUserCsrList一一对应
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ApplyChainMakerBatchUserCertResponse extends AbstractModel
{
    /**
     * @var array 成功生成的用户证书的base64编码字符串列表，与SignUserCsrList一一对应
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SignUserCrtList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $SignUserCrtList 成功生成的用户证书的base64编码字符串列表，与SignUserCsrList一一对应
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
        if (array_key_exists("SignUserCrtList",$param) and $param["SignUserCrtList"] !== null) {
            $this->SignUserCrtList = $param["SignUserCrtList"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
