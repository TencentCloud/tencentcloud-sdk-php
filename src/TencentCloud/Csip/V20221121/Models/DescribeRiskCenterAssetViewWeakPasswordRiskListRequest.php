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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRiskCenterAssetViewWeakPasswordRiskList请求参数结构体
 *
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 * @method Filter getFilter() 获取过滤内容
 * @method void setFilter(Filter $Filter) 设置过滤内容
 * @method array getTags() 获取资产标签
 * @method void setTags(array $Tags) 设置资产标签
 */
class DescribeRiskCenterAssetViewWeakPasswordRiskListRequest extends AbstractModel
{
    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @var Filter 过滤内容
     */
    public $Filter;

    /**
     * @var array 资产标签
     */
    public $Tags;

    /**
     * @param array $MemberId 集团账号的成员id
     * @param Filter $Filter 过滤内容
     * @param array $Tags 资产标签
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new AssetTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
