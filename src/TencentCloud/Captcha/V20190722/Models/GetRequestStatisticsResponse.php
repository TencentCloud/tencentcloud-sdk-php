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
namespace TencentCloud\Captcha\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetRequestStatistics返回参数结构体
 *
 * @method CaptchaStatisticObj getData() 获取查询后数据块
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(CaptchaStatisticObj $Data) 设置查询后数据块
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCaptchaCode() 获取验证码返回码
 * @method void setCaptchaCode(integer $CaptchaCode) 设置验证码返回码
 * @method string getCaptchaMsg() 获取验证码返回信息
 * @method void setCaptchaMsg(string $CaptchaMsg) 设置验证码返回信息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetRequestStatisticsResponse extends AbstractModel
{
    /**
     * @var CaptchaStatisticObj 查询后数据块
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @var integer 验证码返回码
     */
    public $CaptchaCode;

    /**
     * @var string 验证码返回信息
     */
    public $CaptchaMsg;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param CaptchaStatisticObj $Data 查询后数据块
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CaptchaCode 验证码返回码
     * @param string $CaptchaMsg 验证码返回信息
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new CaptchaStatisticObj();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("CaptchaCode",$param) and $param["CaptchaCode"] !== null) {
            $this->CaptchaCode = $param["CaptchaCode"];
        }

        if (array_key_exists("CaptchaMsg",$param) and $param["CaptchaMsg"] !== null) {
            $this->CaptchaMsg = $param["CaptchaMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
