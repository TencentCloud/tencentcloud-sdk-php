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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetEidResult请求参数结构体
 *
 * @method string getEidToken() 获取E证通流程的唯一标识，调用[GetEidToken](https://cloud.tencent.com/document/product/1007/54089)接口时生成。
 * @method void setEidToken(string $EidToken) 设置E证通流程的唯一标识，调用[GetEidToken](https://cloud.tencent.com/document/product/1007/54089)接口时生成。
 * @method string getInfoType() 获取指定需要拉取的结果信息。
- 取值范围：
     0：全部。
    1：文本类。
    2：身份证信息。
    3：最佳截图信息。
    5：意愿核身朗读模式相关结果。
    6：意愿核身问答/点头模式相关结果。
- 例如 13表示拉取文本类、最佳截图信息。
- 默认值：0
 * @method void setInfoType(string $InfoType) 设置指定需要拉取的结果信息。
- 取值范围：
     0：全部。
    1：文本类。
    2：身份证信息。
    3：最佳截图信息。
    5：意愿核身朗读模式相关结果。
    6：意愿核身问答/点头模式相关结果。
- 例如 13表示拉取文本类、最佳截图信息。
- 默认值：0
 * @method integer getBestFramesCount() 获取从活体视频中截取一定张数的最佳帧。
- 默认为0，最大为3，超出3的最多只给3张。
- InfoType需要包含3。
 * @method void setBestFramesCount(integer $BestFramesCount) 设置从活体视频中截取一定张数的最佳帧。
- 默认为0，最大为3，超出3的最多只给3张。
- InfoType需要包含3。
 * @method boolean getIsCutIdCardImage() 获取是否对身份证照片进行裁边。
- 默认为false。
- InfoType需要包含2。
 * @method void setIsCutIdCardImage(boolean $IsCutIdCardImage) 设置是否对身份证照片进行裁边。
- 默认为false。
- InfoType需要包含2。
 * @method boolean getIsNeedIdCardAvatar() 获取是否需要从身份证中抠出头像。
- 默认为false。
- InfoType需要包含2。
 * @method void setIsNeedIdCardAvatar(boolean $IsNeedIdCardAvatar) 设置是否需要从身份证中抠出头像。
- 默认为false。
- InfoType需要包含2。
 */
class GetEidResultRequest extends AbstractModel
{
    /**
     * @var string E证通流程的唯一标识，调用[GetEidToken](https://cloud.tencent.com/document/product/1007/54089)接口时生成。
     */
    public $EidToken;

    /**
     * @var string 指定需要拉取的结果信息。
- 取值范围：
     0：全部。
    1：文本类。
    2：身份证信息。
    3：最佳截图信息。
    5：意愿核身朗读模式相关结果。
    6：意愿核身问答/点头模式相关结果。
- 例如 13表示拉取文本类、最佳截图信息。
- 默认值：0
     */
    public $InfoType;

    /**
     * @var integer 从活体视频中截取一定张数的最佳帧。
- 默认为0，最大为3，超出3的最多只给3张。
- InfoType需要包含3。
     */
    public $BestFramesCount;

    /**
     * @var boolean 是否对身份证照片进行裁边。
- 默认为false。
- InfoType需要包含2。
     */
    public $IsCutIdCardImage;

    /**
     * @var boolean 是否需要从身份证中抠出头像。
- 默认为false。
- InfoType需要包含2。
     */
    public $IsNeedIdCardAvatar;

    /**
     * @param string $EidToken E证通流程的唯一标识，调用[GetEidToken](https://cloud.tencent.com/document/product/1007/54089)接口时生成。
     * @param string $InfoType 指定需要拉取的结果信息。
- 取值范围：
     0：全部。
    1：文本类。
    2：身份证信息。
    3：最佳截图信息。
    5：意愿核身朗读模式相关结果。
    6：意愿核身问答/点头模式相关结果。
- 例如 13表示拉取文本类、最佳截图信息。
- 默认值：0
     * @param integer $BestFramesCount 从活体视频中截取一定张数的最佳帧。
- 默认为0，最大为3，超出3的最多只给3张。
- InfoType需要包含3。
     * @param boolean $IsCutIdCardImage 是否对身份证照片进行裁边。
- 默认为false。
- InfoType需要包含2。
     * @param boolean $IsNeedIdCardAvatar 是否需要从身份证中抠出头像。
- 默认为false。
- InfoType需要包含2。
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
        if (array_key_exists("EidToken",$param) and $param["EidToken"] !== null) {
            $this->EidToken = $param["EidToken"];
        }

        if (array_key_exists("InfoType",$param) and $param["InfoType"] !== null) {
            $this->InfoType = $param["InfoType"];
        }

        if (array_key_exists("BestFramesCount",$param) and $param["BestFramesCount"] !== null) {
            $this->BestFramesCount = $param["BestFramesCount"];
        }

        if (array_key_exists("IsCutIdCardImage",$param) and $param["IsCutIdCardImage"] !== null) {
            $this->IsCutIdCardImage = $param["IsCutIdCardImage"];
        }

        if (array_key_exists("IsNeedIdCardAvatar",$param) and $param["IsNeedIdCardAvatar"] !== null) {
            $this->IsNeedIdCardAvatar = $param["IsNeedIdCardAvatar"];
        }
    }
}
