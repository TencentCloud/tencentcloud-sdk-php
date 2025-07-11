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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 违规资源封禁/解封返回类型
 *
 * @method array getSuccessUrls() 获取成功的url列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessUrls(array $SuccessUrls) 设置成功的url列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFailUrls() 获取失败的url列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailUrls(array $FailUrls) 设置失败的url列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class CacheOptResult extends AbstractModel
{
    /**
     * @var array 成功的url列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessUrls;

    /**
     * @var array 失败的url列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailUrls;

    /**
     * @param array $SuccessUrls 成功的url列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FailUrls 失败的url列表
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
        if (array_key_exists("SuccessUrls",$param) and $param["SuccessUrls"] !== null) {
            $this->SuccessUrls = $param["SuccessUrls"];
        }

        if (array_key_exists("FailUrls",$param) and $param["FailUrls"] !== null) {
            $this->FailUrls = $param["FailUrls"];
        }
    }
}
