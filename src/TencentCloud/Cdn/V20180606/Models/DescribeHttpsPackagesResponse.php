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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHttpsPackages返回参数结构体
 *
 * @method integer getTotalCount() 获取HTTPS请求包总个数
 * @method void setTotalCount(integer $TotalCount) 设置HTTPS请求包总个数
 * @method array getHttpsPackages() 获取HTTPS请求包详情
 * @method void setHttpsPackages(array $HttpsPackages) 设置HTTPS请求包详情
 * @method integer getExpiringCount() 获取即将过期的HTTPS请求包个数（7天内）
 * @method void setExpiringCount(integer $ExpiringCount) 设置即将过期的HTTPS请求包个数（7天内）
 * @method integer getEnabledCount() 获取有效HTTPS请求包个数
 * @method void setEnabledCount(integer $EnabledCount) 设置有效HTTPS请求包个数
 * @method integer getPaidCount() 获取付费HTTPS请求包个数
 * @method void setPaidCount(integer $PaidCount) 设置付费HTTPS请求包个数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeHttpsPackagesResponse extends AbstractModel
{
    /**
     * @var integer HTTPS请求包总个数
     */
    public $TotalCount;

    /**
     * @var array HTTPS请求包详情
     */
    public $HttpsPackages;

    /**
     * @var integer 即将过期的HTTPS请求包个数（7天内）
     */
    public $ExpiringCount;

    /**
     * @var integer 有效HTTPS请求包个数
     */
    public $EnabledCount;

    /**
     * @var integer 付费HTTPS请求包个数
     */
    public $PaidCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount HTTPS请求包总个数
     * @param array $HttpsPackages HTTPS请求包详情
     * @param integer $ExpiringCount 即将过期的HTTPS请求包个数（7天内）
     * @param integer $EnabledCount 有效HTTPS请求包个数
     * @param integer $PaidCount 付费HTTPS请求包个数
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("HttpsPackages",$param) and $param["HttpsPackages"] !== null) {
            $this->HttpsPackages = [];
            foreach ($param["HttpsPackages"] as $key => $value){
                $obj = new HttpsPackage();
                $obj->deserialize($value);
                array_push($this->HttpsPackages, $obj);
            }
        }

        if (array_key_exists("ExpiringCount",$param) and $param["ExpiringCount"] !== null) {
            $this->ExpiringCount = $param["ExpiringCount"];
        }

        if (array_key_exists("EnabledCount",$param) and $param["EnabledCount"] !== null) {
            $this->EnabledCount = $param["EnabledCount"];
        }

        if (array_key_exists("PaidCount",$param) and $param["PaidCount"] !== null) {
            $this->PaidCount = $param["PaidCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
