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
 * 多视角图生 3D 场景下，MultiViewImages 数组中的单个视角。
 *
 * @method string getViewType() 获取<p>视角类型</p><p>枚举值：</p><ul><li>front： 正视图 （必填）</li><li>back： 背视图</li><li>left： 左视图</li><li>right： 右视图</li><li>top： 顶视图</li><li>bottom： 底视图</li><li>left_front： 左前 45°</li><li>right_front： 右前 45°</li></ul><p>MultiViewImages 数组长度 ≥ 2 ; 必须包含 front 视角;  同一 ViewType 不允许重复; 每项必须提供 ViewImageUrl</p>
 * @method void setViewType(string $ViewType) 设置<p>视角类型</p><p>枚举值：</p><ul><li>front： 正视图 （必填）</li><li>back： 背视图</li><li>left： 左视图</li><li>right： 右视图</li><li>top： 顶视图</li><li>bottom： 底视图</li><li>left_front： 左前 45°</li><li>right_front： 右前 45°</li></ul><p>MultiViewImages 数组长度 ≥ 2 ; 必须包含 front 视角;  同一 ViewType 不允许重复; 每项必须提供 ViewImageUrl</p>
 * @method string getViewImageUrl() 获取<p>图片 URL（http / https）</p>
 * @method void setViewImageUrl(string $ViewImageUrl) 设置<p>图片 URL（http / https）</p>
 */
class ViewImage extends AbstractModel
{
    /**
     * @var string <p>视角类型</p><p>枚举值：</p><ul><li>front： 正视图 （必填）</li><li>back： 背视图</li><li>left： 左视图</li><li>right： 右视图</li><li>top： 顶视图</li><li>bottom： 底视图</li><li>left_front： 左前 45°</li><li>right_front： 右前 45°</li></ul><p>MultiViewImages 数组长度 ≥ 2 ; 必须包含 front 视角;  同一 ViewType 不允许重复; 每项必须提供 ViewImageUrl</p>
     */
    public $ViewType;

    /**
     * @var string <p>图片 URL（http / https）</p>
     */
    public $ViewImageUrl;

    /**
     * @param string $ViewType <p>视角类型</p><p>枚举值：</p><ul><li>front： 正视图 （必填）</li><li>back： 背视图</li><li>left： 左视图</li><li>right： 右视图</li><li>top： 顶视图</li><li>bottom： 底视图</li><li>left_front： 左前 45°</li><li>right_front： 右前 45°</li></ul><p>MultiViewImages 数组长度 ≥ 2 ; 必须包含 front 视角;  同一 ViewType 不允许重复; 每项必须提供 ViewImageUrl</p>
     * @param string $ViewImageUrl <p>图片 URL（http / https）</p>
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
        if (array_key_exists("ViewType",$param) and $param["ViewType"] !== null) {
            $this->ViewType = $param["ViewType"];
        }

        if (array_key_exists("ViewImageUrl",$param) and $param["ViewImageUrl"] !== null) {
            $this->ViewImageUrl = $param["ViewImageUrl"];
        }
    }
}
