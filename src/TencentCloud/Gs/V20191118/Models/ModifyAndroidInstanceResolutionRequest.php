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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAndroidInstanceResolution请求参数结构体
 *
 * @method string getAndroidInstanceId() 获取安卓实例 ID
 * @method void setAndroidInstanceId(string $AndroidInstanceId) 设置安卓实例 ID
 * @method integer getWidth() 获取分辨率宽度。建议按照以下数值设置，避免出现性能不足问题：
实例类型为单开（A1）、双开（A2）、三开（ A3）：建议设置为 1080
实例类型为 四开（A4） 及以上：建议设置为 720
 * @method void setWidth(integer $Width) 设置分辨率宽度。建议按照以下数值设置，避免出现性能不足问题：
实例类型为单开（A1）、双开（A2）、三开（ A3）：建议设置为 1080
实例类型为 四开（A4） 及以上：建议设置为 720
 * @method integer getHeight() 获取分辨率高度。建议按照以下数值设置，避免出现性能不足问题：
实例类型为单开（A1）、双开（A2）、三开（ A3）：建议设置为 1920
实例类型为 四开（A4） 及以上：建议设置为 1280
 * @method void setHeight(integer $Height) 设置分辨率高度。建议按照以下数值设置，避免出现性能不足问题：
实例类型为单开（A1）、双开（A2）、三开（ A3）：建议设置为 1920
实例类型为 四开（A4） 及以上：建议设置为 1280
 * @method integer getDPI() 获取每英寸像素点。如果不填，系统将会计算一个合理的数值。修改 DPI 可能会导致 App 异常退出，请谨慎使用！
分辨率为 720x1280：建议配置为 320
分辨率为  1080x1920：建议配置为 480
 * @method void setDPI(integer $DPI) 设置每英寸像素点。如果不填，系统将会计算一个合理的数值。修改 DPI 可能会导致 App 异常退出，请谨慎使用！
分辨率为 720x1280：建议配置为 320
分辨率为  1080x1920：建议配置为 480
 */
class ModifyAndroidInstanceResolutionRequest extends AbstractModel
{
    /**
     * @var string 安卓实例 ID
     */
    public $AndroidInstanceId;

    /**
     * @var integer 分辨率宽度。建议按照以下数值设置，避免出现性能不足问题：
实例类型为单开（A1）、双开（A2）、三开（ A3）：建议设置为 1080
实例类型为 四开（A4） 及以上：建议设置为 720
     */
    public $Width;

    /**
     * @var integer 分辨率高度。建议按照以下数值设置，避免出现性能不足问题：
实例类型为单开（A1）、双开（A2）、三开（ A3）：建议设置为 1920
实例类型为 四开（A4） 及以上：建议设置为 1280
     */
    public $Height;

    /**
     * @var integer 每英寸像素点。如果不填，系统将会计算一个合理的数值。修改 DPI 可能会导致 App 异常退出，请谨慎使用！
分辨率为 720x1280：建议配置为 320
分辨率为  1080x1920：建议配置为 480
     */
    public $DPI;

    /**
     * @param string $AndroidInstanceId 安卓实例 ID
     * @param integer $Width 分辨率宽度。建议按照以下数值设置，避免出现性能不足问题：
实例类型为单开（A1）、双开（A2）、三开（ A3）：建议设置为 1080
实例类型为 四开（A4） 及以上：建议设置为 720
     * @param integer $Height 分辨率高度。建议按照以下数值设置，避免出现性能不足问题：
实例类型为单开（A1）、双开（A2）、三开（ A3）：建议设置为 1920
实例类型为 四开（A4） 及以上：建议设置为 1280
     * @param integer $DPI 每英寸像素点。如果不填，系统将会计算一个合理的数值。修改 DPI 可能会导致 App 异常退出，请谨慎使用！
分辨率为 720x1280：建议配置为 320
分辨率为  1080x1920：建议配置为 480
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
        if (array_key_exists("AndroidInstanceId",$param) and $param["AndroidInstanceId"] !== null) {
            $this->AndroidInstanceId = $param["AndroidInstanceId"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("DPI",$param) and $param["DPI"] !== null) {
            $this->DPI = $param["DPI"];
        }
    }
}
