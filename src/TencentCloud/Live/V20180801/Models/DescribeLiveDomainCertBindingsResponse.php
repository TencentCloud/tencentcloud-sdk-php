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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveDomainCertBindings返回参数结构体
 *
 * @method array getLiveDomainCertBindings() 获取有绑定证书的域名信息数组。
 * @method void setLiveDomainCertBindings(array $LiveDomainCertBindings) 设置有绑定证书的域名信息数组。
 * @method integer getTotalNum() 获取总的记录行数，便于分页。
 * @method void setTotalNum(integer $TotalNum) 设置总的记录行数，便于分页。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLiveDomainCertBindingsResponse extends AbstractModel
{
    /**
     * @var array 有绑定证书的域名信息数组。
     */
    public $LiveDomainCertBindings;

    /**
     * @var integer 总的记录行数，便于分页。
     */
    public $TotalNum;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $LiveDomainCertBindings 有绑定证书的域名信息数组。
     * @param integer $TotalNum 总的记录行数，便于分页。
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
        if (array_key_exists("LiveDomainCertBindings",$param) and $param["LiveDomainCertBindings"] !== null) {
            $this->LiveDomainCertBindings = [];
            foreach ($param["LiveDomainCertBindings"] as $key => $value){
                $obj = new LiveDomainCertBindings();
                $obj->deserialize($value);
                array_push($this->LiveDomainCertBindings, $obj);
            }
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
