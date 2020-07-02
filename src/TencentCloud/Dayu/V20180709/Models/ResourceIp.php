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
 * 资源的IP数组
 *
 * @method string getId() 获取资源ID
 * @method void setId(string $Id) 设置资源ID
 * @method array getIpList() 获取资源的IP数组
 * @method void setIpList(array $IpList) 设置资源的IP数组
 */
class ResourceIp extends AbstractModel
{
    /**
     * @var string 资源ID
     */
    public $Id;

    /**
     * @var array 资源的IP数组
     */
    public $IpList;

    /**
     * @param string $Id 资源ID
     * @param array $IpList 资源的IP数组
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
        if (array_key_exists('Id',$param) and $param['Id'] !== null) {
            $this->Id = $param['Id'];
        }

        if (array_key_exists('IpList',$param) and $param['IpList'] !== null) {
            $this->IpList = $param['IpList'];
        }
    }
}
