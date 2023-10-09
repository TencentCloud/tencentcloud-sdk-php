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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCertificateVerifyResult返回参数结构体
 *
 * @method integer getStatus() 获取状态码
 * @method void setStatus(integer $Status) 设置状态码
 * @method array getDetail() 获取错误详情
 * @method void setDetail(array $Detail) 设置错误详情
 * @method string getNotAfter() 获取过期时间
 * @method void setNotAfter(string $NotAfter) 设置过期时间
 * @method integer getChanged() 获取证书是否改变:1有改变，0没有改变
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChanged(integer $Changed) 设置证书是否改变:1有改变，0没有改变
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCertificateVerifyResultResponse extends AbstractModel
{
    /**
     * @var integer 状态码
     */
    public $Status;

    /**
     * @var array 错误详情
     */
    public $Detail;

    /**
     * @var string 过期时间
     */
    public $NotAfter;

    /**
     * @var integer 证书是否改变:1有改变，0没有改变
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Changed;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Status 状态码
     * @param array $Detail 错误详情
     * @param string $NotAfter 过期时间
     * @param integer $Changed 证书是否改变:1有改变，0没有改变
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("NotAfter",$param) and $param["NotAfter"] !== null) {
            $this->NotAfter = $param["NotAfter"];
        }

        if (array_key_exists("Changed",$param) and $param["Changed"] !== null) {
            $this->Changed = $param["Changed"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
