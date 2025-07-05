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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 导播台推流信息。
当导播台主监启动后，系统将自动将主监推流到腾讯云和其他第三方平台。
 *
 * @method integer getOutputIndex() 获取推流信息Index。
当OutputType为1（表示推流到腾讯云直播）时，该值固定为0。
范围[0,10]。
 * @method void setOutputIndex(integer $OutputIndex) 设置推流信息Index。
当OutputType为1（表示推流到腾讯云直播）时，该值固定为0。
范围[0,10]。
 * @method string getOutputUrl() 获取rtmp协议推流地址。
最大允许长度512字符。
 * @method void setOutputUrl(string $OutputUrl) 设置rtmp协议推流地址。
最大允许长度512字符。
 * @method string getDescription() 获取描述信息。
 * @method void setDescription(string $Description) 设置描述信息。
 * @method string getOutputStreamId() 获取推流到腾讯云直播源站时，使用的流ID。
仅当OutputType为1时生效。
最大允许128字符。
 * @method void setOutputStreamId(string $OutputStreamId) 设置推流到腾讯云直播源站时，使用的流ID。
仅当OutputType为1时生效。
最大允许128字符。
 * @method integer getOutputType() 获取推流类型。
范围[1,2]
1. 推送到腾讯云直播源站。
2. 推送到第三方源站。
 * @method void setOutputType(integer $OutputType) 设置推流类型。
范围[1,2]
1. 推送到腾讯云直播源站。
2. 推送到第三方源站。
 * @method string getOutputDomainName() 获取推到腾讯云直播源站时，使用的域名。
最大允许128字符，且域名需属于当前账号绑定的云直播推流域名。
仅在OutputType为1时生效。
 * @method void setOutputDomainName(string $OutputDomainName) 设置推到腾讯云直播源站时，使用的域名。
最大允许128字符，且域名需属于当前账号绑定的云直播推流域名。
仅在OutputType为1时生效。
 * @method string getOutputAppName() 获取推到腾讯云直播源站时，使用的AppName。
最大允许64字符。
仅在OutputType为1时生效。
 * @method void setOutputAppName(string $OutputAppName) 设置推到腾讯云直播源站时，使用的AppName。
最大允许64字符。
仅在OutputType为1时生效。
 * @method string getOutputParam() 获取推到腾讯云直播源站时需要添加的推流参数。
最大允许长度256字符。
仅在OutputType为1时生效。
 * @method void setOutputParam(string $OutputParam) 设置推到腾讯云直播源站时需要添加的推流参数。
最大允许长度256字符。
仅在OutputType为1时生效。
 */
class CasterOutputInfo extends AbstractModel
{
    /**
     * @var integer 推流信息Index。
当OutputType为1（表示推流到腾讯云直播）时，该值固定为0。
范围[0,10]。
     */
    public $OutputIndex;

    /**
     * @var string rtmp协议推流地址。
最大允许长度512字符。
     */
    public $OutputUrl;

    /**
     * @var string 描述信息。
     */
    public $Description;

    /**
     * @var string 推流到腾讯云直播源站时，使用的流ID。
仅当OutputType为1时生效。
最大允许128字符。
     */
    public $OutputStreamId;

    /**
     * @var integer 推流类型。
范围[1,2]
1. 推送到腾讯云直播源站。
2. 推送到第三方源站。
     */
    public $OutputType;

    /**
     * @var string 推到腾讯云直播源站时，使用的域名。
最大允许128字符，且域名需属于当前账号绑定的云直播推流域名。
仅在OutputType为1时生效。
     */
    public $OutputDomainName;

    /**
     * @var string 推到腾讯云直播源站时，使用的AppName。
最大允许64字符。
仅在OutputType为1时生效。
     */
    public $OutputAppName;

    /**
     * @var string 推到腾讯云直播源站时需要添加的推流参数。
最大允许长度256字符。
仅在OutputType为1时生效。
     */
    public $OutputParam;

    /**
     * @param integer $OutputIndex 推流信息Index。
当OutputType为1（表示推流到腾讯云直播）时，该值固定为0。
范围[0,10]。
     * @param string $OutputUrl rtmp协议推流地址。
最大允许长度512字符。
     * @param string $Description 描述信息。
     * @param string $OutputStreamId 推流到腾讯云直播源站时，使用的流ID。
仅当OutputType为1时生效。
最大允许128字符。
     * @param integer $OutputType 推流类型。
范围[1,2]
1. 推送到腾讯云直播源站。
2. 推送到第三方源站。
     * @param string $OutputDomainName 推到腾讯云直播源站时，使用的域名。
最大允许128字符，且域名需属于当前账号绑定的云直播推流域名。
仅在OutputType为1时生效。
     * @param string $OutputAppName 推到腾讯云直播源站时，使用的AppName。
最大允许64字符。
仅在OutputType为1时生效。
     * @param string $OutputParam 推到腾讯云直播源站时需要添加的推流参数。
最大允许长度256字符。
仅在OutputType为1时生效。
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
        if (array_key_exists("OutputIndex",$param) and $param["OutputIndex"] !== null) {
            $this->OutputIndex = $param["OutputIndex"];
        }

        if (array_key_exists("OutputUrl",$param) and $param["OutputUrl"] !== null) {
            $this->OutputUrl = $param["OutputUrl"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OutputStreamId",$param) and $param["OutputStreamId"] !== null) {
            $this->OutputStreamId = $param["OutputStreamId"];
        }

        if (array_key_exists("OutputType",$param) and $param["OutputType"] !== null) {
            $this->OutputType = $param["OutputType"];
        }

        if (array_key_exists("OutputDomainName",$param) and $param["OutputDomainName"] !== null) {
            $this->OutputDomainName = $param["OutputDomainName"];
        }

        if (array_key_exists("OutputAppName",$param) and $param["OutputAppName"] !== null) {
            $this->OutputAppName = $param["OutputAppName"];
        }

        if (array_key_exists("OutputParam",$param) and $param["OutputParam"] !== null) {
            $this->OutputParam = $param["OutputParam"];
        }
    }
}
