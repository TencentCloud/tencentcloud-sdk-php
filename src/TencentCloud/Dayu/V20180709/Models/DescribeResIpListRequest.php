<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResIpList请求参数结构体
 *
 * @method string getBusiness() 获取大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
 * @method array getIdList() 获取资源ID, 如果不填，则获取用户所有资源的IP
 * @method void setIdList(array $IdList) 设置资源ID, 如果不填，则获取用户所有资源的IP
 */
class DescribeResIpListRequest extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
     */
    public $Business;

    /**
     * @var array 资源ID, 如果不填，则获取用户所有资源的IP
     */
    public $IdList;

    /**
     * @param string $Business 大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
     * @param array $IdList 资源ID, 如果不填，则获取用户所有资源的IP
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
        if (array_key_exists('Business',$param) and $param['Business'] !== null) {
            $this->Business = $param['Business'];
        }

        if (array_key_exists('IdList',$param) and $param['IdList'] !== null) {
            $this->IdList = $param['IdList'];
        }
    }
}
