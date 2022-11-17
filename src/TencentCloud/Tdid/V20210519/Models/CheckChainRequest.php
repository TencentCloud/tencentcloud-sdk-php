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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckChain请求参数结构体
 *
 * @method integer getGroupId() 获取群组ID
 * @method void setGroupId(integer $GroupId) 设置群组ID
 * @method string getClusterId() 获取网络ID
 * @method void setClusterId(string $ClusterId) 设置网络ID
 * @method string getAgencyName() 获取did服务机构名称
 * @method void setAgencyName(string $AgencyName) 设置did服务机构名称
 */
class CheckChainRequest extends AbstractModel
{
    /**
     * @var integer 群组ID
     */
    public $GroupId;

    /**
     * @var string 网络ID
     */
    public $ClusterId;

    /**
     * @var string did服务机构名称
     */
    public $AgencyName;

    /**
     * @param integer $GroupId 群组ID
     * @param string $ClusterId 网络ID
     * @param string $AgencyName did服务机构名称
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AgencyName",$param) and $param["AgencyName"] !== null) {
            $this->AgencyName = $param["AgencyName"];
        }
    }
}
