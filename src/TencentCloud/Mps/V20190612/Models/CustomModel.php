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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 商品裂变模特信息
 *
 * @method string getGender() 获取<p>性别</p><p>枚举值：</p><ul><li>male： 男性</li><li>female： 女性</li><li>any： 不限</li></ul>
 * @method void setGender(string $Gender) 设置<p>性别</p><p>枚举值：</p><ul><li>male： 男性</li><li>female： 女性</li><li>any： 不限</li></ul>
 * @method string getAge() 获取<p>年龄范围</p><p>枚举值：</p><ul><li>teen： 青年</li><li>young_adult： 成年</li><li>middle_aged： 中年</li><li>mature： 成熟</li></ul>
 * @method void setAge(string $Age) 设置<p>年龄范围</p><p>枚举值：</p><ul><li>teen： 青年</li><li>young_adult： 成年</li><li>middle_aged： 中年</li><li>mature： 成熟</li></ul>
 * @method string getAppearance() 获取<p>外貌</p><p>枚举值：</p><ul><li>caucasian： 白人</li><li>asian： 亚裔</li><li>latino： 拉丁裔</li><li>african： 非裔</li><li>middle_eastern： 中东</li></ul>
 * @method void setAppearance(string $Appearance) 设置<p>外貌</p><p>枚举值：</p><ul><li>caucasian： 白人</li><li>asian： 亚裔</li><li>latino： 拉丁裔</li><li>african： 非裔</li><li>middle_eastern： 中东</li></ul>
 * @method string getBodyType() 获取<p>身材</p><p>枚举值：</p><ul><li>slim： 苗条</li><li>standard： 标准</li><li>athletic： 健壮</li><li>chubby： 丰满</li></ul>
 * @method void setBodyType(string $BodyType) 设置<p>身材</p><p>枚举值：</p><ul><li>slim： 苗条</li><li>standard： 标准</li><li>athletic： 健壮</li><li>chubby： 丰满</li></ul>
 */
class CustomModel extends AbstractModel
{
    /**
     * @var string <p>性别</p><p>枚举值：</p><ul><li>male： 男性</li><li>female： 女性</li><li>any： 不限</li></ul>
     */
    public $Gender;

    /**
     * @var string <p>年龄范围</p><p>枚举值：</p><ul><li>teen： 青年</li><li>young_adult： 成年</li><li>middle_aged： 中年</li><li>mature： 成熟</li></ul>
     */
    public $Age;

    /**
     * @var string <p>外貌</p><p>枚举值：</p><ul><li>caucasian： 白人</li><li>asian： 亚裔</li><li>latino： 拉丁裔</li><li>african： 非裔</li><li>middle_eastern： 中东</li></ul>
     */
    public $Appearance;

    /**
     * @var string <p>身材</p><p>枚举值：</p><ul><li>slim： 苗条</li><li>standard： 标准</li><li>athletic： 健壮</li><li>chubby： 丰满</li></ul>
     */
    public $BodyType;

    /**
     * @param string $Gender <p>性别</p><p>枚举值：</p><ul><li>male： 男性</li><li>female： 女性</li><li>any： 不限</li></ul>
     * @param string $Age <p>年龄范围</p><p>枚举值：</p><ul><li>teen： 青年</li><li>young_adult： 成年</li><li>middle_aged： 中年</li><li>mature： 成熟</li></ul>
     * @param string $Appearance <p>外貌</p><p>枚举值：</p><ul><li>caucasian： 白人</li><li>asian： 亚裔</li><li>latino： 拉丁裔</li><li>african： 非裔</li><li>middle_eastern： 中东</li></ul>
     * @param string $BodyType <p>身材</p><p>枚举值：</p><ul><li>slim： 苗条</li><li>standard： 标准</li><li>athletic： 健壮</li><li>chubby： 丰满</li></ul>
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
        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("Appearance",$param) and $param["Appearance"] !== null) {
            $this->Appearance = $param["Appearance"];
        }

        if (array_key_exists("BodyType",$param) and $param["BodyType"] !== null) {
            $this->BodyType = $param["BodyType"];
        }
    }
}
