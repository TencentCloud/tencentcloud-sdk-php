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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEndPoint请求参数结构体
 *
 * @method string getEndPointName() 获取终端节点名称
 * @method void setEndPointName(string $EndPointName) 设置终端节点名称
 * @method string getEndPointServiceId() 获取终端节点服务ID（vpc终端节点服务ID）
 * @method void setEndPointServiceId(string $EndPointServiceId) 设置终端节点服务ID（vpc终端节点服务ID）
 * @method string getEndPointRegion() 获取终端节点地域，必须要和终端节点服务所属地域一致
 * @method void setEndPointRegion(string $EndPointRegion) 设置终端节点地域，必须要和终端节点服务所属地域一致
 * @method integer getIpNum() 获取终端节点ip数量
 * @method void setIpNum(integer $IpNum) 设置终端节点ip数量
 */
class CreateEndPointRequest extends AbstractModel
{
    /**
     * @var string 终端节点名称
     */
    public $EndPointName;

    /**
     * @var string 终端节点服务ID（vpc终端节点服务ID）
     */
    public $EndPointServiceId;

    /**
     * @var string 终端节点地域，必须要和终端节点服务所属地域一致
     */
    public $EndPointRegion;

    /**
     * @var integer 终端节点ip数量
     */
    public $IpNum;

    /**
     * @param string $EndPointName 终端节点名称
     * @param string $EndPointServiceId 终端节点服务ID（vpc终端节点服务ID）
     * @param string $EndPointRegion 终端节点地域，必须要和终端节点服务所属地域一致
     * @param integer $IpNum 终端节点ip数量
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
        if (array_key_exists("EndPointName",$param) and $param["EndPointName"] !== null) {
            $this->EndPointName = $param["EndPointName"];
        }

        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }

        if (array_key_exists("EndPointRegion",$param) and $param["EndPointRegion"] !== null) {
            $this->EndPointRegion = $param["EndPointRegion"];
        }

        if (array_key_exists("IpNum",$param) and $param["IpNum"] !== null) {
            $this->IpNum = $param["IpNum"];
        }
    }
}
