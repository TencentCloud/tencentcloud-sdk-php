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
namespace TencentCloud\Ai3d\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitProfileTo3DJob请求参数结构体
 *
 * @method Image getProfile() 获取真人头像参考图 Base64 数据和参考图 Url。
- Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
- 图片限制：单边分辨率小于4096且大于500，转成 Base64 字符串后小于 10MB，格式支持 jpg、jpeg、png。
 * @method void setProfile(Image $Profile) 设置真人头像参考图 Base64 数据和参考图 Url。
- Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
- 图片限制：单边分辨率小于4096且大于500，转成 Base64 字符串后小于 10MB，格式支持 jpg、jpeg、png。
 * @method string getTemplate() 获取生成人物模板，参考值：

basketball: 动感球手；

badminton: 羽扬中华；

pingpong: 国球荣耀；

gymnastics:勇攀巅峰；

pilidance: 舞动青春；

tennis: 网球甜心；

athletics: 东方疾风；

footballboykicking1:激情逐风；

footballboykicking2: 绿茵之星；

guitar:甜酷弦音；

footballboy: 足球小将；

skateboard: 滑跃青春；

futuresoilder: 未来战士；

explorer: 逐梦旷野；

beardollgirl:可爱女孩；

bibpantsboy:都市白领；

womansitpose: 职业丽影；

womanstandpose2: 悠闲时光；

mysteriousprincess: 海洋公主；

manstandpose2: 演讲之星；
 * @method void setTemplate(string $Template) 设置生成人物模板，参考值：

basketball: 动感球手；

badminton: 羽扬中华；

pingpong: 国球荣耀；

gymnastics:勇攀巅峰；

pilidance: 舞动青春；

tennis: 网球甜心；

athletics: 东方疾风；

footballboykicking1:激情逐风；

footballboykicking2: 绿茵之星；

guitar:甜酷弦音；

footballboy: 足球小将；

skateboard: 滑跃青春；

futuresoilder: 未来战士；

explorer: 逐梦旷野；

beardollgirl:可爱女孩；

bibpantsboy:都市白领；

womansitpose: 职业丽影；

womanstandpose2: 悠闲时光；

mysteriousprincess: 海洋公主；

manstandpose2: 演讲之星；
 */
class SubmitProfileTo3DJobRequest extends AbstractModel
{
    /**
     * @var Image 真人头像参考图 Base64 数据和参考图 Url。
- Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
- 图片限制：单边分辨率小于4096且大于500，转成 Base64 字符串后小于 10MB，格式支持 jpg、jpeg、png。
     */
    public $Profile;

    /**
     * @var string 生成人物模板，参考值：

basketball: 动感球手；

badminton: 羽扬中华；

pingpong: 国球荣耀；

gymnastics:勇攀巅峰；

pilidance: 舞动青春；

tennis: 网球甜心；

athletics: 东方疾风；

footballboykicking1:激情逐风；

footballboykicking2: 绿茵之星；

guitar:甜酷弦音；

footballboy: 足球小将；

skateboard: 滑跃青春；

futuresoilder: 未来战士；

explorer: 逐梦旷野；

beardollgirl:可爱女孩；

bibpantsboy:都市白领；

womansitpose: 职业丽影；

womanstandpose2: 悠闲时光；

mysteriousprincess: 海洋公主；

manstandpose2: 演讲之星；
     */
    public $Template;

    /**
     * @param Image $Profile 真人头像参考图 Base64 数据和参考图 Url。
- Base64 和 Url 必须提供一个，如果都提供以 Url 为准。
- 图片限制：单边分辨率小于4096且大于500，转成 Base64 字符串后小于 10MB，格式支持 jpg、jpeg、png。
     * @param string $Template 生成人物模板，参考值：

basketball: 动感球手；

badminton: 羽扬中华；

pingpong: 国球荣耀；

gymnastics:勇攀巅峰；

pilidance: 舞动青春；

tennis: 网球甜心；

athletics: 东方疾风；

footballboykicking1:激情逐风；

footballboykicking2: 绿茵之星；

guitar:甜酷弦音；

footballboy: 足球小将；

skateboard: 滑跃青春；

futuresoilder: 未来战士；

explorer: 逐梦旷野；

beardollgirl:可爱女孩；

bibpantsboy:都市白领；

womansitpose: 职业丽影；

womanstandpose2: 悠闲时光；

mysteriousprincess: 海洋公主；

manstandpose2: 演讲之星；
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
        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = new Image();
            $this->Profile->deserialize($param["Profile"]);
        }

        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = $param["Template"];
        }
    }
}
