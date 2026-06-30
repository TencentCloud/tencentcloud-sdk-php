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
 * @method string getEmailIdentity() 获取<p>您的发信域名，建议使用三级以上域名。例如：mail.qcloud.com。</p>
 * @method void setEmailIdentity(string $EmailIdentity) 设置<p>您的发信域名，建议使用三级以上域名。例如：mail.qcloud.com。</p>
 * @method integer getDKIMOption() 获取<p>生成的dkim密钥长度。0:1024，1:2048</p>
 * @method void setDKIMOption(integer $DKIMOption) 设置<p>生成的dkim密钥长度。0:1024，1:2048</p>
 * @method array getTagList() 获取<p>tag 标签</p>
 * @method void setTagList(array $TagList) 设置<p>tag 标签</p>
 */
class CreateEmailIdentityRequest extends AbstractModel
{
    /**
     * @var string <p>您的发信域名，建议使用三级以上域名。例如：mail.qcloud.com。</p>
     */
    public $EmailIdentity;

    /**
     * @var integer <p>生成的dkim密钥长度。0:1024，1:2048</p>
     */
    public $DKIMOption;

    /**
     * @var array <p>tag 标签</p>
     */
    public $TagList;

    /**
     * @param string $EmailIdentity <p>您的发信域名，建议使用三级以上域名。例如：mail.qcloud.com。</p>
     * @param integer $DKIMOption <p>生成的dkim密钥长度。0:1024，1:2048</p>
     * @param array $TagList <p>tag 标签</p>
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
