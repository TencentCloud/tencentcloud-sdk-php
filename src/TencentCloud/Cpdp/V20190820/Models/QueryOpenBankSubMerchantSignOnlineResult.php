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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 子商户查询签约返回结果
 *
 * @method string getSignStatus() 获取处理状态
  SUCCESS：签约成功
  FAILED：签约失败
  PROCESSING：签约中
 * @method void setSignStatus(string $SignStatus) 设置处理状态
  SUCCESS：签约成功
  FAILED：签约失败
  PROCESSING：签约中
 * @method string getSignMessage() 获取上传返回描述，例如失败原因等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSignMessage(string $SignMessage) 设置上传返回描述，例如失败原因等
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueryOpenBankSubMerchantSignOnlineResult extends AbstractModel
{
    /**
     * @var string 处理状态
  SUCCESS：签约成功
  FAILED：签约失败
  PROCESSING：签约中
     */
    public $SignStatus;

    /**
     * @var string 上传返回描述，例如失败原因等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SignMessage;

    /**
     * @param string $SignStatus 处理状态
  SUCCESS：签约成功
  FAILED：签约失败
  PROCESSING：签约中
     * @param string $SignMessage 上传返回描述，例如失败原因等
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
        if (array_key_exists("SignStatus",$param) and $param["SignStatus"] !== null) {
            $this->SignStatus = $param["SignStatus"];
        }

        if (array_key_exists("SignMessage",$param) and $param["SignMessage"] !== null) {
            $this->SignMessage = $param["SignMessage"];
        }
    }
}
