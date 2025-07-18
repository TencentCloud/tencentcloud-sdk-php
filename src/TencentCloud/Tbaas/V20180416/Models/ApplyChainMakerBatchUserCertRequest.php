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
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyChainMakerBatchUserCert请求参数结构体
 *
 * @method string getClusterId() 获取网络ID，可在区块链网络详情或列表中获取
 * @method void setClusterId(string $ClusterId) 设置网络ID，可在区块链网络详情或列表中获取
 * @method array getSignUserCsrList() 获取证书标识和证书请求文件，可参考TBaaS证书生成相关文档生成证书请求文件
 * @method void setSignUserCsrList(array $SignUserCsrList) 设置证书标识和证书请求文件，可参考TBaaS证书生成相关文档生成证书请求文件
 */
class ApplyChainMakerBatchUserCertRequest extends AbstractModel
{
    /**
     * @var string 网络ID，可在区块链网络详情或列表中获取
     */
    public $ClusterId;

    /**
     * @var array 证书标识和证书请求文件，可参考TBaaS证书生成相关文档生成证书请求文件
     */
    public $SignUserCsrList;

    /**
     * @param string $ClusterId 网络ID，可在区块链网络详情或列表中获取
     * @param array $SignUserCsrList 证书标识和证书请求文件，可参考TBaaS证书生成相关文档生成证书请求文件
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("SignUserCsrList",$param) and $param["SignUserCsrList"] !== null) {
            $this->SignUserCsrList = [];
            foreach ($param["SignUserCsrList"] as $key => $value){
                $obj = new SignCertCsr();
                $obj->deserialize($value);
                array_push($this->SignUserCsrList, $obj);
            }
        }
    }
}
