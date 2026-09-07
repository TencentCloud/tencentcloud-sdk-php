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
 * CreateLiveAvatarCloneFigure请求参数结构体
 *
 * @method string getSceneType() 获取<p>形象克隆场景类型</p><p>枚举值：</p><ul><li>PHOTO： 图生数字人</li><li>GREEN_SCREEN： 绿幕数字人</li><li>REAL_SHOT： 实景数字人</li></ul>
 * @method void setSceneType(string $SceneType) 设置<p>形象克隆场景类型</p><p>枚举值：</p><ul><li>PHOTO： 图生数字人</li><li>GREEN_SCREEN： 绿幕数字人</li><li>REAL_SHOT： 实景数字人</li></ul>
 * @method string getFigureName() 获取<p>克隆的形象的名字</p>
 * @method void setFigureName(string $FigureName) 设置<p>克隆的形象的名字</p>
 * @method string getMaterialUrl() 获取<p>克隆的形象的url</p>
 * @method void setMaterialUrl(string $MaterialUrl) 设置<p>克隆的形象的url</p>
 * @method string getGender() 获取<p>克隆的形象的性别</p><p>枚举值：</p><ul><li>MALE： 男</li><li>FEMALE： 女</li><li>UNHNOWN： 不知道</li></ul>
 * @method void setGender(string $Gender) 设置<p>克隆的形象的性别</p><p>枚举值：</p><ul><li>MALE： 男</li><li>FEMALE： 女</li><li>UNHNOWN： 不知道</li></ul>
 * @method string getIdentityWrittenUrl() 获取<p>授权pdf</p>
 * @method void setIdentityWrittenUrl(string $IdentityWrittenUrl) 设置<p>授权pdf</p>
 * @method string getIdentityVideoUrl() 获取<p>授权视频</p>
 * @method void setIdentityVideoUrl(string $IdentityVideoUrl) 设置<p>授权视频</p>
 * @method integer getPhotoVersion() 获取<p>图生视频时，动作训练幅度大小</p><p>枚举值：</p><ul><li>0： 只有头部轻微动</li><li>1： 头部跟身体均动</li></ul>
 * @method void setPhotoVersion(integer $PhotoVersion) 设置<p>图生视频时，动作训练幅度大小</p><p>枚举值：</p><ul><li>0： 只有头部轻微动</li><li>1： 头部跟身体均动</li></ul>
 */
class CreateLiveAvatarCloneFigureRequest extends AbstractModel
{
    /**
     * @var string <p>形象克隆场景类型</p><p>枚举值：</p><ul><li>PHOTO： 图生数字人</li><li>GREEN_SCREEN： 绿幕数字人</li><li>REAL_SHOT： 实景数字人</li></ul>
     */
    public $SceneType;

    /**
     * @var string <p>克隆的形象的名字</p>
     */
    public $FigureName;

    /**
     * @var string <p>克隆的形象的url</p>
     */
    public $MaterialUrl;

    /**
     * @var string <p>克隆的形象的性别</p><p>枚举值：</p><ul><li>MALE： 男</li><li>FEMALE： 女</li><li>UNHNOWN： 不知道</li></ul>
     */
    public $Gender;

    /**
     * @var string <p>授权pdf</p>
     */
    public $IdentityWrittenUrl;

    /**
     * @var string <p>授权视频</p>
     */
    public $IdentityVideoUrl;

    /**
     * @var integer <p>图生视频时，动作训练幅度大小</p><p>枚举值：</p><ul><li>0： 只有头部轻微动</li><li>1： 头部跟身体均动</li></ul>
     */
    public $PhotoVersion;

    /**
     * @param string $SceneType <p>形象克隆场景类型</p><p>枚举值：</p><ul><li>PHOTO： 图生数字人</li><li>GREEN_SCREEN： 绿幕数字人</li><li>REAL_SHOT： 实景数字人</li></ul>
     * @param string $FigureName <p>克隆的形象的名字</p>
     * @param string $MaterialUrl <p>克隆的形象的url</p>
     * @param string $Gender <p>克隆的形象的性别</p><p>枚举值：</p><ul><li>MALE： 男</li><li>FEMALE： 女</li><li>UNHNOWN： 不知道</li></ul>
     * @param string $IdentityWrittenUrl <p>授权pdf</p>
     * @param string $IdentityVideoUrl <p>授权视频</p>
     * @param integer $PhotoVersion <p>图生视频时，动作训练幅度大小</p><p>枚举值：</p><ul><li>0： 只有头部轻微动</li><li>1： 头部跟身体均动</li></ul>
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
        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("FigureName",$param) and $param["FigureName"] !== null) {
            $this->FigureName = $param["FigureName"];
        }

        if (array_key_exists("MaterialUrl",$param) and $param["MaterialUrl"] !== null) {
            $this->MaterialUrl = $param["MaterialUrl"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("IdentityWrittenUrl",$param) and $param["IdentityWrittenUrl"] !== null) {
            $this->IdentityWrittenUrl = $param["IdentityWrittenUrl"];
        }

        if (array_key_exists("IdentityVideoUrl",$param) and $param["IdentityVideoUrl"] !== null) {
            $this->IdentityVideoUrl = $param["IdentityVideoUrl"];
        }

        if (array_key_exists("PhotoVersion",$param) and $param["PhotoVersion"] !== null) {
            $this->PhotoVersion = $param["PhotoVersion"];
        }
    }
}
