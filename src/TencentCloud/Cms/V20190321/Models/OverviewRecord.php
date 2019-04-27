<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getEvilCount() 获取调用恶意量
 * @method void setEvilCount(integer $EvilCount) 设置调用恶意量
 * @method string getServiceType() 获取Text表示文本，Image表示图片，Audio表示音频，Video表示视频
 * @method void setServiceType(string $ServiceType) 设置Text表示文本，Image表示图片，Audio表示音频，Video表示视频
 * @method integer getTotalCount() 获取调用总量
 * @method void setTotalCount(integer $TotalCount) 设置调用总量
 * @method string getYoy() 获取恶意量同比增长率
 * @method void setYoy(string $Yoy) 设置恶意量同比增长率
 */

/**
 *概览数据
 */
class OverviewRecord extends AbstractModel
{
    /**
     * @var integer 调用恶意量
     */
    public $EvilCount;

    /**
     * @var string Text表示文本，Image表示图片，Audio表示音频，Video表示视频
     */
    public $ServiceType;

    /**
     * @var integer 调用总量
     */
    public $TotalCount;

    /**
     * @var string 恶意量同比增长率
     */
    public $Yoy;
    /**
     * @param integer $EvilCount 调用恶意量
     * @param string $ServiceType Text表示文本，Image表示图片，Audio表示音频，Video表示视频
     * @param integer $TotalCount 调用总量
     * @param string $Yoy 恶意量同比增长率
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("EvilCount",$param) and $param["EvilCount"] !== null) {
            $this->EvilCount = $param["EvilCount"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Yoy",$param) and $param["Yoy"] !== null) {
            $this->Yoy = $param["Yoy"];
        }
    }
}
