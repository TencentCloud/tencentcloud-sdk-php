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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFace请求参数结构体
 *
 * @method string getPersonId() 获取<p>人员ID，取值为创建人员接口中的PersonId。</p>
 * @method void setPersonId(string $PersonId) 设置<p>人员ID，取值为创建人员接口中的PersonId。</p>
 * @method array getImages() 获取<p>图片 base64 数据。</p><ul><li>base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。所有格式的图片短边像素不小于64。</li><li>人员人脸总数量不可超过5张。</li><li>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
 * @method void setImages(array $Images) 设置<p>图片 base64 数据。</p><ul><li>base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。所有格式的图片短边像素不小于64。</li><li>人员人脸总数量不可超过5张。</li><li>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
 * @method array getUrls() 获取<p>图片的 Url 。</p><ul><li>对应图片 base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。所有格式的图片短边像素不小于64。</li><li>Url、Image必须提供一个，如果都提供，只使用 Url。  </li><li>图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 </li><li>非腾讯云存储的Url速度和稳定性可能受一定影响。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li><li>人员人脸总数量不可超过5张。</li><li>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。</li></ul>
 * @method void setUrls(array $Urls) 设置<p>图片的 Url 。</p><ul><li>对应图片 base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。所有格式的图片短边像素不小于64。</li><li>Url、Image必须提供一个，如果都提供，只使用 Url。  </li><li>图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 </li><li>非腾讯云存储的Url速度和稳定性可能受一定影响。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li><li>人员人脸总数量不可超过5张。</li><li>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。</li></ul>
 * @method float getFaceMatchThreshold() 获取<p>只有和该人员已有的人脸相似度超过FaceMatchThreshold值的人脸，才能增加人脸成功。 </p><ul><li>默认值60分。</li><li>取值范围：[0,100] 。</li></ul>
 * @method void setFaceMatchThreshold(float $FaceMatchThreshold) 设置<p>只有和该人员已有的人脸相似度超过FaceMatchThreshold值的人脸，才能增加人脸成功。 </p><ul><li>默认值60分。</li><li>取值范围：[0,100] 。</li></ul>
 * @method integer getQualityControl() 获取<p>图片质量控制。 </p><ul><li>取值范围：<br>0: 不进行控制；<br>1:较低的质量要求，图像存在非常模糊，眼睛鼻子嘴巴遮挡至少其中一种或多种的情况；<br>2: 一般的质量要求，图像存在偏亮，偏暗，模糊或一般模糊，眉毛遮挡，脸颊遮挡，下巴遮挡，至少其中三种的情况；<br>3: 较高的质量要求，图像存在偏亮，偏暗，一般模糊，眉毛遮挡，脸颊遮挡，下巴遮挡，其中一到两种的情况；<br>4: 很高的质量要求，各个维度均为最好或最多在某一维度上存在轻微问题； </li><li>默认 0。 </li><li>若图片质量不满足要求，则返回结果中会提示图片质量检测不符要求。</li></ul>
 * @method void setQualityControl(integer $QualityControl) 设置<p>图片质量控制。 </p><ul><li>取值范围：<br>0: 不进行控制；<br>1:较低的质量要求，图像存在非常模糊，眼睛鼻子嘴巴遮挡至少其中一种或多种的情况；<br>2: 一般的质量要求，图像存在偏亮，偏暗，模糊或一般模糊，眉毛遮挡，脸颊遮挡，下巴遮挡，至少其中三种的情况；<br>3: 较高的质量要求，图像存在偏亮，偏暗，一般模糊，眉毛遮挡，脸颊遮挡，下巴遮挡，其中一到两种的情况；<br>4: 很高的质量要求，各个维度均为最好或最多在某一维度上存在轻微问题； </li><li>默认 0。 </li><li>若图片质量不满足要求，则返回结果中会提示图片质量检测不符要求。</li></ul>
 * @method integer getNeedRotateDetection() 获取<p>是否开启图片旋转识别支持。</p><ul><li>取值范围：0为不开启，1为开启。</li><li>默认为0。</li><li>本参数的作用为，当图片中的人脸被旋转且图片没有exif信息时，如果不开启图片旋转识别支持则无法正确检测、识别图片中的人脸。</li><li>若您确认图片包含exif信息或者您确认输入图中人脸不会出现被旋转情况，请不要开启本参数。开启后，整体耗时将可能增加数百毫秒。</li></ul>
 * @method void setNeedRotateDetection(integer $NeedRotateDetection) 设置<p>是否开启图片旋转识别支持。</p><ul><li>取值范围：0为不开启，1为开启。</li><li>默认为0。</li><li>本参数的作用为，当图片中的人脸被旋转且图片没有exif信息时，如果不开启图片旋转识别支持则无法正确检测、识别图片中的人脸。</li><li>若您确认图片包含exif信息或者您确认输入图中人脸不会出现被旋转情况，请不要开启本参数。开启后，整体耗时将可能增加数百毫秒。</li></ul>
 * @method Encryption getEncryption() 获取<p>是否需要对请求信息进行全包体加密。支持的加密算法:AES-256-CBC。有加密需求的用户可使用此参数。</p>
 * @method void setEncryption(Encryption $Encryption) 设置<p>是否需要对请求信息进行全包体加密。支持的加密算法:AES-256-CBC。有加密需求的用户可使用此参数。</p>
 * @method string getEncryptedBody() 获取<p>加密后的密文。加密前的数据格式如下:{&quot;Url&quot;:&quot;<strong>&quot;,&quot;Image&quot;:&quot;</strong>&quot;}。</p>
 * @method void setEncryptedBody(string $EncryptedBody) 设置<p>加密后的密文。加密前的数据格式如下:{&quot;Url&quot;:&quot;<strong>&quot;,&quot;Image&quot;:&quot;</strong>&quot;}。</p>
 */
class CreateFaceRequest extends AbstractModel
{
    /**
     * @var string <p>人员ID，取值为创建人员接口中的PersonId。</p>
     */
    public $PersonId;

    /**
     * @var array <p>图片 base64 数据。</p><ul><li>base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。所有格式的图片短边像素不小于64。</li><li>人员人脸总数量不可超过5张。</li><li>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
     */
    public $Images;

    /**
     * @var array <p>图片的 Url 。</p><ul><li>对应图片 base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。所有格式的图片短边像素不小于64。</li><li>Url、Image必须提供一个，如果都提供，只使用 Url。  </li><li>图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 </li><li>非腾讯云存储的Url速度和稳定性可能受一定影响。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li><li>人员人脸总数量不可超过5张。</li><li>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。</li></ul>
     */
    public $Urls;

    /**
     * @var float <p>只有和该人员已有的人脸相似度超过FaceMatchThreshold值的人脸，才能增加人脸成功。 </p><ul><li>默认值60分。</li><li>取值范围：[0,100] 。</li></ul>
     */
    public $FaceMatchThreshold;

    /**
     * @var integer <p>图片质量控制。 </p><ul><li>取值范围：<br>0: 不进行控制；<br>1:较低的质量要求，图像存在非常模糊，眼睛鼻子嘴巴遮挡至少其中一种或多种的情况；<br>2: 一般的质量要求，图像存在偏亮，偏暗，模糊或一般模糊，眉毛遮挡，脸颊遮挡，下巴遮挡，至少其中三种的情况；<br>3: 较高的质量要求，图像存在偏亮，偏暗，一般模糊，眉毛遮挡，脸颊遮挡，下巴遮挡，其中一到两种的情况；<br>4: 很高的质量要求，各个维度均为最好或最多在某一维度上存在轻微问题； </li><li>默认 0。 </li><li>若图片质量不满足要求，则返回结果中会提示图片质量检测不符要求。</li></ul>
     */
    public $QualityControl;

    /**
     * @var integer <p>是否开启图片旋转识别支持。</p><ul><li>取值范围：0为不开启，1为开启。</li><li>默认为0。</li><li>本参数的作用为，当图片中的人脸被旋转且图片没有exif信息时，如果不开启图片旋转识别支持则无法正确检测、识别图片中的人脸。</li><li>若您确认图片包含exif信息或者您确认输入图中人脸不会出现被旋转情况，请不要开启本参数。开启后，整体耗时将可能增加数百毫秒。</li></ul>
     */
    public $NeedRotateDetection;

    /**
     * @var Encryption <p>是否需要对请求信息进行全包体加密。支持的加密算法:AES-256-CBC。有加密需求的用户可使用此参数。</p>
     */
    public $Encryption;

    /**
     * @var string <p>加密后的密文。加密前的数据格式如下:{&quot;Url&quot;:&quot;<strong>&quot;,&quot;Image&quot;:&quot;</strong>&quot;}。</p>
     */
    public $EncryptedBody;

    /**
     * @param string $PersonId <p>人员ID，取值为创建人员接口中的PersonId。</p>
     * @param array $Images <p>图片 base64 数据。</p><ul><li>base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。所有格式的图片短边像素不小于64。</li><li>人员人脸总数量不可超过5张。</li><li>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
     * @param array $Urls <p>图片的 Url 。</p><ul><li>对应图片 base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。所有格式的图片短边像素不小于64。</li><li>Url、Image必须提供一个，如果都提供，只使用 Url。  </li><li>图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 </li><li>非腾讯云存储的Url速度和稳定性可能受一定影响。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li><li>人员人脸总数量不可超过5张。</li><li>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。</li></ul>
     * @param float $FaceMatchThreshold <p>只有和该人员已有的人脸相似度超过FaceMatchThreshold值的人脸，才能增加人脸成功。 </p><ul><li>默认值60分。</li><li>取值范围：[0,100] 。</li></ul>
     * @param integer $QualityControl <p>图片质量控制。 </p><ul><li>取值范围：<br>0: 不进行控制；<br>1:较低的质量要求，图像存在非常模糊，眼睛鼻子嘴巴遮挡至少其中一种或多种的情况；<br>2: 一般的质量要求，图像存在偏亮，偏暗，模糊或一般模糊，眉毛遮挡，脸颊遮挡，下巴遮挡，至少其中三种的情况；<br>3: 较高的质量要求，图像存在偏亮，偏暗，一般模糊，眉毛遮挡，脸颊遮挡，下巴遮挡，其中一到两种的情况；<br>4: 很高的质量要求，各个维度均为最好或最多在某一维度上存在轻微问题； </li><li>默认 0。 </li><li>若图片质量不满足要求，则返回结果中会提示图片质量检测不符要求。</li></ul>
     * @param integer $NeedRotateDetection <p>是否开启图片旋转识别支持。</p><ul><li>取值范围：0为不开启，1为开启。</li><li>默认为0。</li><li>本参数的作用为，当图片中的人脸被旋转且图片没有exif信息时，如果不开启图片旋转识别支持则无法正确检测、识别图片中的人脸。</li><li>若您确认图片包含exif信息或者您确认输入图中人脸不会出现被旋转情况，请不要开启本参数。开启后，整体耗时将可能增加数百毫秒。</li></ul>
     * @param Encryption $Encryption <p>是否需要对请求信息进行全包体加密。支持的加密算法:AES-256-CBC。有加密需求的用户可使用此参数。</p>
     * @param string $EncryptedBody <p>加密后的密文。加密前的数据格式如下:{&quot;Url&quot;:&quot;<strong>&quot;,&quot;Image&quot;:&quot;</strong>&quot;}。</p>
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
        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = $param["Images"];
        }

        if (array_key_exists("Urls",$param) and $param["Urls"] !== null) {
            $this->Urls = $param["Urls"];
        }

        if (array_key_exists("FaceMatchThreshold",$param) and $param["FaceMatchThreshold"] !== null) {
            $this->FaceMatchThreshold = $param["FaceMatchThreshold"];
        }

        if (array_key_exists("QualityControl",$param) and $param["QualityControl"] !== null) {
            $this->QualityControl = $param["QualityControl"];
        }

        if (array_key_exists("NeedRotateDetection",$param) and $param["NeedRotateDetection"] !== null) {
            $this->NeedRotateDetection = $param["NeedRotateDetection"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = new Encryption();
            $this->Encryption->deserialize($param["Encryption"]);
        }

        if (array_key_exists("EncryptedBody",$param) and $param["EncryptedBody"] !== null) {
            $this->EncryptedBody = $param["EncryptedBody"];
        }
    }
}
