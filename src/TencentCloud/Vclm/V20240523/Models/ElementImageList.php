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
namespace TencentCloud\Vclm\V20240523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主体正面图 参考图列表
 *
 * @method array getReferImages() 获取<p>主体参考图</p>
 * @method void setReferImages(array $ReferImages) 设置<p>主体参考图</p>
 * @method string getFrontalImage() 获取<p>主体主图</p>
 * @method void setFrontalImage(string $FrontalImage) 设置<p>主体主图</p>
 */
class ElementImageList extends AbstractModel
{
    /**
     * @var array <p>主体参考图</p>
     */
    public $ReferImages;

    /**
     * @var string <p>主体主图</p>
     */
    public $FrontalImage;

    /**
     * @param array $ReferImages <p>主体参考图</p>
     * @param string $FrontalImage <p>主体主图</p>
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
        if (array_key_exists("ReferImages",$param) and $param["ReferImages"] !== null) {
            $this->ReferImages = [];
            foreach ($param["ReferImages"] as $key => $value){
                $obj = new ReferImageItem();
                $obj->deserialize($value);
                array_push($this->ReferImages, $obj);
            }
        }

        if (array_key_exists("FrontalImage",$param) and $param["FrontalImage"] !== null) {
            $this->FrontalImage = $param["FrontalImage"];
        }
    }
}
