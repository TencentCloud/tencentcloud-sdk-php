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
namespace TencentCloud\Cloudapp\V20220530\Models;
use TencentCloud\Common\AbstractModel;

/**
 * License 内容信息
 *
 * @method string getText() 获取<p>License 文本内容。支持密钥、证书等文本形式，二进制的密钥需要伙伴进行 base64 转码</p>
 * @method void setText(string $Text) 设置<p>License 文本内容。支持密钥、证书等文本形式，二进制的密钥需要伙伴进行 base64 转码</p>
 * @method string getDeploymentOutput() 获取<p>部署服务输出信息，基于部署签发 License 时需要该参数。</p>
 * @method void setDeploymentOutput(string $DeploymentOutput) 设置<p>部署服务输出信息，基于部署签发 License 时需要该参数。</p>
 * @method array getMetadata() 获取<p>License 前端展示信息。key、value 形式，比如可传入，颁发机构：XXXX 有限公司</p>
 * @method void setMetadata(array $Metadata) 设置<p>License 前端展示信息。key、value 形式，比如可传入，颁发机构：XXXX 有限公司</p>
 */
class LicenseData extends AbstractModel
{
    /**
     * @var string <p>License 文本内容。支持密钥、证书等文本形式，二进制的密钥需要伙伴进行 base64 转码</p>
     */
    public $Text;

    /**
     * @var string <p>部署服务输出信息，基于部署签发 License 时需要该参数。</p>
     */
    public $DeploymentOutput;

    /**
     * @var array <p>License 前端展示信息。key、value 形式，比如可传入，颁发机构：XXXX 有限公司</p>
     */
    public $Metadata;

    /**
     * @param string $Text <p>License 文本内容。支持密钥、证书等文本形式，二进制的密钥需要伙伴进行 base64 转码</p>
     * @param string $DeploymentOutput <p>部署服务输出信息，基于部署签发 License 时需要该参数。</p>
     * @param array $Metadata <p>License 前端展示信息。key、value 形式，比如可传入，颁发机构：XXXX 有限公司</p>
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("DeploymentOutput",$param) and $param["DeploymentOutput"] !== null) {
            $this->DeploymentOutput = $param["DeploymentOutput"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = [];
            foreach ($param["Metadata"] as $key => $value){
                $obj = new DisplayMetadata();
                $obj->deserialize($value);
                array_push($this->Metadata, $obj);
            }
        }
    }
}
