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
 * SearchPersons请求参数结构体
 *
 * @method array getGroupIds() 获取<p>希望搜索的人员库列表，上限100个。数组元素取值为创建人员库接口中的GroupId。</p>
 * @method void setGroupIds(array $GroupIds) 设置<p>希望搜索的人员库列表，上限100个。数组元素取值为创建人员库接口中的GroupId。</p>
 * @method string getImage() 获取<p>图片 base64 数据。</p><ul><li>base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。</li><li>所有格式的图片短边像素不小于64。</li><li>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
 * @method void setImage(string $Image) 设置<p>图片 base64 数据。</p><ul><li>base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。</li><li>所有格式的图片短边像素不小于64。</li><li>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
 * @method string getUrl() 获取<p>图片的 Url 。</p><ul><li>对应图片 base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。</li><li>所有格式的图片短边像素不小于64。</li><li>Url、Image必须提供一个，如果都提供，只使用 Url。</li><li>图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。</li><li>非腾讯云存储的Url速度和稳定性可能受一定影响。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
 * @method void setUrl(string $Url) 设置<p>图片的 Url 。</p><ul><li>对应图片 base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。</li><li>所有格式的图片短边像素不小于64。</li><li>Url、Image必须提供一个，如果都提供，只使用 Url。</li><li>图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。</li><li>非腾讯云存储的Url速度和稳定性可能受一定影响。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
 * @method integer getMaxFaceNum() 获取<p>最多识别的人脸数目。</p><ul><li>默认值为1（仅检测图片中面积最大的那张人脸），最大值为10。</li><li>MaxFaceNum用于，当输入的待识别图片包含多张人脸时，设定要搜索的人脸的数量。</li><li>例：输入的Image或Url中的图片包含多张人脸，设MaxFaceNum=5，则会识别图片中面积最大的5张人脸。</li></ul>
 * @method void setMaxFaceNum(integer $MaxFaceNum) 设置<p>最多识别的人脸数目。</p><ul><li>默认值为1（仅检测图片中面积最大的那张人脸），最大值为10。</li><li>MaxFaceNum用于，当输入的待识别图片包含多张人脸时，设定要搜索的人脸的数量。</li><li>例：输入的Image或Url中的图片包含多张人脸，设MaxFaceNum=5，则会识别图片中面积最大的5张人脸。</li></ul>
 * @method integer getMinFaceSize() 获取<p>人脸长和宽的最小尺寸，单位为像素。</p><ul><li>默认为34。</li><li>低于34将影响搜索精度。</li><li>建议设置为80。</li></ul>
 * @method void setMinFaceSize(integer $MinFaceSize) 设置<p>人脸长和宽的最小尺寸，单位为像素。</p><ul><li>默认为34。</li><li>低于34将影响搜索精度。</li><li>建议设置为80。</li></ul>
 * @method integer getMaxPersonNum() 获取<p>单张被识别的人脸返回的最相似人员数量。</p><ul><li>默认值为5，最大值为100。</li><li>例，设MaxFaceNum为1，MaxPersonNum为8，则返回Top8相似的人员信息。</li><li>值越大，需要处理的时间越长。建议不要超过10。</li></ul>
 * @method void setMaxPersonNum(integer $MaxPersonNum) 设置<p>单张被识别的人脸返回的最相似人员数量。</p><ul><li>默认值为5，最大值为100。</li><li>例，设MaxFaceNum为1，MaxPersonNum为8，则返回Top8相似的人员信息。</li><li>值越大，需要处理的时间越长。建议不要超过10。</li></ul>
 * @method integer getQualityControl() 获取<p>图片质量控制。 </p><ul><li>取值范围：<br>0: 不进行控制。<br>1:较低的质量要求，图像存在非常模糊，眼睛鼻子嘴巴遮挡至少其中一种或多种的情况。<br>2: 一般的质量要求，图像存在偏亮，偏暗，模糊或一般模糊，眉毛遮挡，脸颊遮挡，下巴遮挡，至少其中三种的情况。<br>3: 较高的质量要求，图像存在偏亮，偏暗，一般模糊，眉毛遮挡，脸颊遮挡，下巴遮挡，其中一到两种的情况。<br>4: 很高的质量要求，各个维度均为最好或最多在某一维度上存在轻微问题。</li><li>默认 0。 </li><li>若图片质量不满足要求，则返回结果中会提示图片质量检测不符要求。</li></ul>
 * @method void setQualityControl(integer $QualityControl) 设置<p>图片质量控制。 </p><ul><li>取值范围：<br>0: 不进行控制。<br>1:较低的质量要求，图像存在非常模糊，眼睛鼻子嘴巴遮挡至少其中一种或多种的情况。<br>2: 一般的质量要求，图像存在偏亮，偏暗，模糊或一般模糊，眉毛遮挡，脸颊遮挡，下巴遮挡，至少其中三种的情况。<br>3: 较高的质量要求，图像存在偏亮，偏暗，一般模糊，眉毛遮挡，脸颊遮挡，下巴遮挡，其中一到两种的情况。<br>4: 很高的质量要求，各个维度均为最好或最多在某一维度上存在轻微问题。</li><li>默认 0。 </li><li>若图片质量不满足要求，则返回结果中会提示图片质量检测不符要求。</li></ul>
 * @method float getFaceMatchThreshold() 获取<p>出参Score中，只有大于等于FaceMatchThreshold值的结果才会返回。</p><ul><li>默认为0。</li><li>取值范围：[0.0,100.0) 。</li></ul>
 * @method void setFaceMatchThreshold(float $FaceMatchThreshold) 设置<p>出参Score中，只有大于等于FaceMatchThreshold值的结果才会返回。</p><ul><li>默认为0。</li><li>取值范围：[0.0,100.0) 。</li></ul>
 * @method integer getNeedPersonInfo() 获取<p>是否返回人员具体信息。</p><ul><li>取值范围：0 为关闭，1 为开启。</li><li>默认为 0。</li><li>其他非0非1值默认为0</li></ul>
 * @method void setNeedPersonInfo(integer $NeedPersonInfo) 设置<p>是否返回人员具体信息。</p><ul><li>取值范围：0 为关闭，1 为开启。</li><li>默认为 0。</li><li>其他非0非1值默认为0</li></ul>
 * @method integer getNeedRotateDetection() 获取<p>是否开启图片旋转识别支持。</p><ul><li>取值范围：0为不开启，1为开启。</li><li>默认为0。</li><li>本参数的作用为，当图片中的人脸被旋转且图片没有exif信息时，如果不开启图片旋转识别支持则无法正确检测、识别图片中的人脸。</li><li>若您确认图片包含exif信息或者您确认输入图中人脸不会出现被旋转情况，请不要开启本参数。开启后，整体耗时将可能增加数百毫秒。</li></ul>
 * @method void setNeedRotateDetection(integer $NeedRotateDetection) 设置<p>是否开启图片旋转识别支持。</p><ul><li>取值范围：0为不开启，1为开启。</li><li>默认为0。</li><li>本参数的作用为，当图片中的人脸被旋转且图片没有exif信息时，如果不开启图片旋转识别支持则无法正确检测、识别图片中的人脸。</li><li>若您确认图片包含exif信息或者您确认输入图中人脸不会出现被旋转情况，请不要开启本参数。开启后，整体耗时将可能增加数百毫秒。</li></ul>
 * @method Encryption getEncryption() 获取<p>是否需要对请求信息进行全包体加密。支持的加密算法:AES-256-CBC。有加密需求的用户可使用此参数。</p>
 * @method void setEncryption(Encryption $Encryption) 设置<p>是否需要对请求信息进行全包体加密。支持的加密算法:AES-256-CBC。有加密需求的用户可使用此参数。</p>
 * @method string getEncryptedBody() 获取<p>加密后的密文。加密前的数据格式如下:{&quot;Url&quot;:&quot;<strong>&quot;,&quot;Image&quot;:&quot;</strong>&quot;}。</p>
 * @method void setEncryptedBody(string $EncryptedBody) 设置<p>加密后的密文。加密前的数据格式如下:{&quot;Url&quot;:&quot;<strong>&quot;,&quot;Image&quot;:&quot;</strong>&quot;}。</p>
 */
class SearchPersonsRequest extends AbstractModel
{
    /**
     * @var array <p>希望搜索的人员库列表，上限100个。数组元素取值为创建人员库接口中的GroupId。</p>
     */
    public $GroupIds;

    /**
     * @var string <p>图片 base64 数据。</p><ul><li>base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。</li><li>所有格式的图片短边像素不小于64。</li><li>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
     */
    public $Image;

    /**
     * @var string <p>图片的 Url 。</p><ul><li>对应图片 base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。</li><li>所有格式的图片短边像素不小于64。</li><li>Url、Image必须提供一个，如果都提供，只使用 Url。</li><li>图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。</li><li>非腾讯云存储的Url速度和稳定性可能受一定影响。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
     */
    public $Url;

    /**
     * @var integer <p>最多识别的人脸数目。</p><ul><li>默认值为1（仅检测图片中面积最大的那张人脸），最大值为10。</li><li>MaxFaceNum用于，当输入的待识别图片包含多张人脸时，设定要搜索的人脸的数量。</li><li>例：输入的Image或Url中的图片包含多张人脸，设MaxFaceNum=5，则会识别图片中面积最大的5张人脸。</li></ul>
     */
    public $MaxFaceNum;

    /**
     * @var integer <p>人脸长和宽的最小尺寸，单位为像素。</p><ul><li>默认为34。</li><li>低于34将影响搜索精度。</li><li>建议设置为80。</li></ul>
     */
    public $MinFaceSize;

    /**
     * @var integer <p>单张被识别的人脸返回的最相似人员数量。</p><ul><li>默认值为5，最大值为100。</li><li>例，设MaxFaceNum为1，MaxPersonNum为8，则返回Top8相似的人员信息。</li><li>值越大，需要处理的时间越长。建议不要超过10。</li></ul>
     */
    public $MaxPersonNum;

    /**
     * @var integer <p>图片质量控制。 </p><ul><li>取值范围：<br>0: 不进行控制。<br>1:较低的质量要求，图像存在非常模糊，眼睛鼻子嘴巴遮挡至少其中一种或多种的情况。<br>2: 一般的质量要求，图像存在偏亮，偏暗，模糊或一般模糊，眉毛遮挡，脸颊遮挡，下巴遮挡，至少其中三种的情况。<br>3: 较高的质量要求，图像存在偏亮，偏暗，一般模糊，眉毛遮挡，脸颊遮挡，下巴遮挡，其中一到两种的情况。<br>4: 很高的质量要求，各个维度均为最好或最多在某一维度上存在轻微问题。</li><li>默认 0。 </li><li>若图片质量不满足要求，则返回结果中会提示图片质量检测不符要求。</li></ul>
     */
    public $QualityControl;

    /**
     * @var float <p>出参Score中，只有大于等于FaceMatchThreshold值的结果才会返回。</p><ul><li>默认为0。</li><li>取值范围：[0.0,100.0) 。</li></ul>
     */
    public $FaceMatchThreshold;

    /**
     * @var integer <p>是否返回人员具体信息。</p><ul><li>取值范围：0 为关闭，1 为开启。</li><li>默认为 0。</li><li>其他非0非1值默认为0</li></ul>
     */
    public $NeedPersonInfo;

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
     * @param array $GroupIds <p>希望搜索的人员库列表，上限100个。数组元素取值为创建人员库接口中的GroupId。</p>
     * @param string $Image <p>图片 base64 数据。</p><ul><li>base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。</li><li>所有格式的图片短边像素不小于64。</li><li>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
     * @param string $Url <p>图片的 Url 。</p><ul><li>对应图片 base64 编码后大小不可超过5M。</li><li>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。</li><li>所有格式的图片短边像素不小于64。</li><li>Url、Image必须提供一个，如果都提供，只使用 Url。</li><li>图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。</li><li>非腾讯云存储的Url速度和稳定性可能受一定影响。</li><li>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</li></ul>
     * @param integer $MaxFaceNum <p>最多识别的人脸数目。</p><ul><li>默认值为1（仅检测图片中面积最大的那张人脸），最大值为10。</li><li>MaxFaceNum用于，当输入的待识别图片包含多张人脸时，设定要搜索的人脸的数量。</li><li>例：输入的Image或Url中的图片包含多张人脸，设MaxFaceNum=5，则会识别图片中面积最大的5张人脸。</li></ul>
     * @param integer $MinFaceSize <p>人脸长和宽的最小尺寸，单位为像素。</p><ul><li>默认为34。</li><li>低于34将影响搜索精度。</li><li>建议设置为80。</li></ul>
     * @param integer $MaxPersonNum <p>单张被识别的人脸返回的最相似人员数量。</p><ul><li>默认值为5，最大值为100。</li><li>例，设MaxFaceNum为1，MaxPersonNum为8，则返回Top8相似的人员信息。</li><li>值越大，需要处理的时间越长。建议不要超过10。</li></ul>
     * @param integer $QualityControl <p>图片质量控制。 </p><ul><li>取值范围：<br>0: 不进行控制。<br>1:较低的质量要求，图像存在非常模糊，眼睛鼻子嘴巴遮挡至少其中一种或多种的情况。<br>2: 一般的质量要求，图像存在偏亮，偏暗，模糊或一般模糊，眉毛遮挡，脸颊遮挡，下巴遮挡，至少其中三种的情况。<br>3: 较高的质量要求，图像存在偏亮，偏暗，一般模糊，眉毛遮挡，脸颊遮挡，下巴遮挡，其中一到两种的情况。<br>4: 很高的质量要求，各个维度均为最好或最多在某一维度上存在轻微问题。</li><li>默认 0。 </li><li>若图片质量不满足要求，则返回结果中会提示图片质量检测不符要求。</li></ul>
     * @param float $FaceMatchThreshold <p>出参Score中，只有大于等于FaceMatchThreshold值的结果才会返回。</p><ul><li>默认为0。</li><li>取值范围：[0.0,100.0) 。</li></ul>
     * @param integer $NeedPersonInfo <p>是否返回人员具体信息。</p><ul><li>取值范围：0 为关闭，1 为开启。</li><li>默认为 0。</li><li>其他非0非1值默认为0</li></ul>
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
        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("MaxFaceNum",$param) and $param["MaxFaceNum"] !== null) {
            $this->MaxFaceNum = $param["MaxFaceNum"];
        }

        if (array_key_exists("MinFaceSize",$param) and $param["MinFaceSize"] !== null) {
            $this->MinFaceSize = $param["MinFaceSize"];
        }

        if (array_key_exists("MaxPersonNum",$param) and $param["MaxPersonNum"] !== null) {
            $this->MaxPersonNum = $param["MaxPersonNum"];
        }

        if (array_key_exists("QualityControl",$param) and $param["QualityControl"] !== null) {
            $this->QualityControl = $param["QualityControl"];
        }

        if (array_key_exists("FaceMatchThreshold",$param) and $param["FaceMatchThreshold"] !== null) {
            $this->FaceMatchThreshold = $param["FaceMatchThreshold"];
        }

        if (array_key_exists("NeedPersonInfo",$param) and $param["NeedPersonInfo"] !== null) {
            $this->NeedPersonInfo = $param["NeedPersonInfo"];
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
