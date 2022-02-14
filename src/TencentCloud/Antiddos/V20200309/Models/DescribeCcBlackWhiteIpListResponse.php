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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCcBlackWhiteIpList返回参数结构体
 *
 * @method integer getTotal() 获取CC四层黑白名单策略列表总数
 * @method void setTotal(integer $Total) 设置CC四层黑白名单策略列表总数
 * @method array getCcBlackWhiteIpList() 获取CC四层黑白名单策略列表详情
 * @method void setCcBlackWhiteIpList(array $CcBlackWhiteIpList) 设置CC四层黑白名单策略列表详情
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCcBlackWhiteIpListResponse extends AbstractModel
{
    /**
     * @var integer CC四层黑白名单策略列表总数
     */
    public $Total;

    /**
     * @var array CC四层黑白名单策略列表详情
     */
    public $CcBlackWhiteIpList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total CC四层黑白名单策略列表总数
     * @param array $CcBlackWhiteIpList CC四层黑白名单策略列表详情
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("CcBlackWhiteIpList",$param) and $param["CcBlackWhiteIpList"] !== null) {
            $this->CcBlackWhiteIpList = [];
            foreach ($param["CcBlackWhiteIpList"] as $key => $value){
                $obj = new CcBlackWhiteIpPolicy();
                $obj->deserialize($value);
                array_push($this->CcBlackWhiteIpList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
