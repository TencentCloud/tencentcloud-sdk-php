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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CNAME 接入类型站点参数详情。
 *
 * @method integer getIsFake() 获取是否伪站点，取值有：
<li> 0：非伪站点；</li>
<li> 1：伪站点。</li>

 * @method void setIsFake(integer $IsFake) 设置是否伪站点，取值有：
<li> 0：非伪站点；</li>
<li> 1：伪站点。</li>

 * @method OwnershipVerification getOwnershipVerification() 获取归属权验证信息。详情请参考 [站点/域名归属权验证](https://cloud.tencent.com/document/product/1552/70789) 。
 * @method void setOwnershipVerification(OwnershipVerification $OwnershipVerification) 设置归属权验证信息。详情请参考 [站点/域名归属权验证](https://cloud.tencent.com/document/product/1552/70789) 。
 */
class CNAMEDetail extends AbstractModel
{
    /**
     * @var integer 是否伪站点，取值有：
<li> 0：非伪站点；</li>
<li> 1：伪站点。</li>

     */
    public $IsFake;

    /**
     * @var OwnershipVerification 归属权验证信息。详情请参考 [站点/域名归属权验证](https://cloud.tencent.com/document/product/1552/70789) 。
     */
    public $OwnershipVerification;

    /**
     * @param integer $IsFake 是否伪站点，取值有：
<li> 0：非伪站点；</li>
<li> 1：伪站点。</li>

     * @param OwnershipVerification $OwnershipVerification 归属权验证信息。详情请参考 [站点/域名归属权验证](https://cloud.tencent.com/document/product/1552/70789) 。
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
        if (array_key_exists("IsFake",$param) and $param["IsFake"] !== null) {
            $this->IsFake = $param["IsFake"];
        }

        if (array_key_exists("OwnershipVerification",$param) and $param["OwnershipVerification"] !== null) {
            $this->OwnershipVerification = new OwnershipVerification();
            $this->OwnershipVerification->deserialize($param["OwnershipVerification"]);
        }
    }
}
