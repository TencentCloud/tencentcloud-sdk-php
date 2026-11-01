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
 * 动作级补充素材：服饰套装 / 背景
 *
 * @method array getOutfits() 获取<p>服饰套装参考图，多套按视频中的分段换装</p>
 * @method void setOutfits(array $Outfits) 设置<p>服饰套装参考图，多套按视频中的分段换装</p>
 * @method array getBackgrounds() 获取<p>背景/场景参考图</p>
 * @method void setBackgrounds(array $Backgrounds) 设置<p>背景/场景参考图</p>
 */
class CloneViralReference extends AbstractModel
{
    /**
     * @var array <p>服饰套装参考图，多套按视频中的分段换装</p>
     */
    public $Outfits;

    /**
     * @var array <p>背景/场景参考图</p>
     */
    public $Backgrounds;

    /**
     * @param array $Outfits <p>服饰套装参考图，多套按视频中的分段换装</p>
     * @param array $Backgrounds <p>背景/场景参考图</p>
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
        if (array_key_exists("Outfits",$param) and $param["Outfits"] !== null) {
            $this->Outfits = $param["Outfits"];
        }

        if (array_key_exists("Backgrounds",$param) and $param["Backgrounds"] !== null) {
            $this->Backgrounds = $param["Backgrounds"];
        }
    }
}
