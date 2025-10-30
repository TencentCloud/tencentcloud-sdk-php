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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEmailIdentity请求参数结构体
 *
 * @method string getEmailIdentity() 获取您的发信域名，建议使用三级以上域名。例如：mail.qcloud.com。
 * @method void setEmailIdentity(string $EmailIdentity) 设置您的发信域名，建议使用三级以上域名。例如：mail.qcloud.com。
 * @method integer getDKIMOption() 获取生成的dkim密钥长度。0:1024，1:2048
 * @method void setDKIMOption(integer $DKIMOption) 设置生成的dkim密钥长度。0:1024，1:2048
 * @method array getTagList() 获取tag 标签
 * @method void setTagList(array $TagList) 设置tag 标签
 */
class CreateEmailIdentityRequest extends AbstractModel
{
    /**
     * @var string 您的发信域名，建议使用三级以上域名。例如：mail.qcloud.com。
     */
    public $EmailIdentity;

    /**
     * @var integer 生成的dkim密钥长度。0:1024，1:2048
     */
    public $DKIMOption;

    /**
     * @var array tag 标签
     */
    public $TagList;

    /**
     * @param string $EmailIdentity 您的发信域名，建议使用三级以上域名。例如：mail.qcloud.com。
     * @param integer $DKIMOption 生成的dkim密钥长度。0:1024，1:2048
     * @param array $TagList tag 标签
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
        if (array_key_exists("EmailIdentity",$param) and $param["EmailIdentity"] !== null) {
            $this->EmailIdentity = $param["EmailIdentity"];
        }

        if (array_key_exists("DKIMOption",$param) and $param["DKIMOption"] !== null) {
            $this->DKIMOption = $param["DKIMOption"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagList();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }
    }
}
