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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSeal返回参数结构体
 *
 * @method string getSealId() 获取<p>电子印章ID，为32位字符串。<br>建议开发者保留此印章ID，后续指定签署区印章或者操作印章需此印章ID。<br>可登录腾讯电子签控制台，在 &quot;印章&quot;-&gt;&quot;印章中心&quot;选择查看的印章，在&quot;印章详情&quot; 中查看某个印章的SealId(在页面中展示为印章ID)。</p>
 * @method void setSealId(string $SealId) 设置<p>电子印章ID，为32位字符串。<br>建议开发者保留此印章ID，后续指定签署区印章或者操作印章需此印章ID。<br>可登录腾讯电子签控制台，在 &quot;印章&quot;-&gt;&quot;印章中心&quot;选择查看的印章，在&quot;印章详情&quot; 中查看某个印章的SealId(在页面中展示为印章ID)。</p>
 * @method string getImageUrl() 获取<p>电子印章预览链接地址，地址默认失效时间为24小时。</p>
 * @method void setImageUrl(string $ImageUrl) 设置<p>电子印章预览链接地址，地址默认失效时间为24小时。</p>
 * @method string getSealOperatorVerifyPath() 获取<p>人脸验证操作人链接，用法可以参考&quot;<a href="https://qian.tencent.com/developers/company/openwxminiprogram/">跳转电子签小程序配置</a>&quot;，默认为空。</p>
 * @method void setSealOperatorVerifyPath(string $SealOperatorVerifyPath) 设置<p>人脸验证操作人链接，用法可以参考&quot;<a href="https://qian.tencent.com/developers/company/openwxminiprogram/">跳转电子签小程序配置</a>&quot;，默认为空。</p>
 * @method string getSealOperatorVerifyQrcodeUrl() 获取<p>人脸验证操作人二维码链接，扫码后会跳转到腾讯电子签小程序进行人脸验证，默认为空。</p>
 * @method void setSealOperatorVerifyQrcodeUrl(string $SealOperatorVerifyQrcodeUrl) 设置<p>人脸验证操作人二维码链接，扫码后会跳转到腾讯电子签小程序进行人脸验证，默认为空。</p>
 * @method string getPreviewFileUrl() 获取<p>创建印章预览逻辑，返回的是印章加盖在示例文件上的效果图片链接。链接有效期为90天。</p>
 * @method void setPreviewFileUrl(string $PreviewFileUrl) 设置<p>创建印章预览逻辑，返回的是印章加盖在示例文件上的效果图片链接。链接有效期为90天。</p>
 * @method string getPreviewPdfUrl() 获取<p>创建印章预览逻辑，返回的是印章加盖在示例文件上的效果PDF文件链接。链接有效期为90天。</p>
 * @method void setPreviewPdfUrl(string $PreviewPdfUrl) 设置<p>创建印章预览逻辑，返回的是印章加盖在示例文件上的效果PDF文件链接。链接有效期为90天。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateSealResponse extends AbstractModel
{
    /**
     * @var string <p>电子印章ID，为32位字符串。<br>建议开发者保留此印章ID，后续指定签署区印章或者操作印章需此印章ID。<br>可登录腾讯电子签控制台，在 &quot;印章&quot;-&gt;&quot;印章中心&quot;选择查看的印章，在&quot;印章详情&quot; 中查看某个印章的SealId(在页面中展示为印章ID)。</p>
     */
    public $SealId;

    /**
     * @var string <p>电子印章预览链接地址，地址默认失效时间为24小时。</p>
     */
    public $ImageUrl;

    /**
     * @var string <p>人脸验证操作人链接，用法可以参考&quot;<a href="https://qian.tencent.com/developers/company/openwxminiprogram/">跳转电子签小程序配置</a>&quot;，默认为空。</p>
     */
    public $SealOperatorVerifyPath;

    /**
     * @var string <p>人脸验证操作人二维码链接，扫码后会跳转到腾讯电子签小程序进行人脸验证，默认为空。</p>
     */
    public $SealOperatorVerifyQrcodeUrl;

    /**
     * @var string <p>创建印章预览逻辑，返回的是印章加盖在示例文件上的效果图片链接。链接有效期为90天。</p>
     */
    public $PreviewFileUrl;

    /**
     * @var string <p>创建印章预览逻辑，返回的是印章加盖在示例文件上的效果PDF文件链接。链接有效期为90天。</p>
     */
    public $PreviewPdfUrl;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SealId <p>电子印章ID，为32位字符串。<br>建议开发者保留此印章ID，后续指定签署区印章或者操作印章需此印章ID。<br>可登录腾讯电子签控制台，在 &quot;印章&quot;-&gt;&quot;印章中心&quot;选择查看的印章，在&quot;印章详情&quot; 中查看某个印章的SealId(在页面中展示为印章ID)。</p>
     * @param string $ImageUrl <p>电子印章预览链接地址，地址默认失效时间为24小时。</p>
     * @param string $SealOperatorVerifyPath <p>人脸验证操作人链接，用法可以参考&quot;<a href="https://qian.tencent.com/developers/company/openwxminiprogram/">跳转电子签小程序配置</a>&quot;，默认为空。</p>
     * @param string $SealOperatorVerifyQrcodeUrl <p>人脸验证操作人二维码链接，扫码后会跳转到腾讯电子签小程序进行人脸验证，默认为空。</p>
     * @param string $PreviewFileUrl <p>创建印章预览逻辑，返回的是印章加盖在示例文件上的效果图片链接。链接有效期为90天。</p>
     * @param string $PreviewPdfUrl <p>创建印章预览逻辑，返回的是印章加盖在示例文件上的效果PDF文件链接。链接有效期为90天。</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("SealId",$param) and $param["SealId"] !== null) {
            $this->SealId = $param["SealId"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("SealOperatorVerifyPath",$param) and $param["SealOperatorVerifyPath"] !== null) {
            $this->SealOperatorVerifyPath = $param["SealOperatorVerifyPath"];
        }

        if (array_key_exists("SealOperatorVerifyQrcodeUrl",$param) and $param["SealOperatorVerifyQrcodeUrl"] !== null) {
            $this->SealOperatorVerifyQrcodeUrl = $param["SealOperatorVerifyQrcodeUrl"];
        }

        if (array_key_exists("PreviewFileUrl",$param) and $param["PreviewFileUrl"] !== null) {
            $this->PreviewFileUrl = $param["PreviewFileUrl"];
        }

        if (array_key_exists("PreviewPdfUrl",$param) and $param["PreviewPdfUrl"] !== null) {
            $this->PreviewPdfUrl = $param["PreviewPdfUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
