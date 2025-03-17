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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 签署控件的配置信息，用在嵌入式发起的页面配置，包括

- 签署控件是否默认展示日期.
 *
 * @method boolean getHideDate() 获取签署控件默认属性配置，是否默认展示签署日期， 在页面中可以进行修改。

- false 展示签署日期（默认）
- true 不展示签署日期 
![image](https://qcloudimg.tencent-cloud.cn/raw/448514412e2f69f6129425beda4ff568.png)。
 * @method void setHideDate(boolean $HideDate) 设置签署控件默认属性配置，是否默认展示签署日期， 在页面中可以进行修改。

- false 展示签署日期（默认）
- true 不展示签署日期 
![image](https://qcloudimg.tencent-cloud.cn/raw/448514412e2f69f6129425beda4ff568.png)。
 */
class SignComponentConfig extends AbstractModel
{
    /**
     * @var boolean 签署控件默认属性配置，是否默认展示签署日期， 在页面中可以进行修改。

- false 展示签署日期（默认）
- true 不展示签署日期 
![image](https://qcloudimg.tencent-cloud.cn/raw/448514412e2f69f6129425beda4ff568.png)。
     */
    public $HideDate;

    /**
     * @param boolean $HideDate 签署控件默认属性配置，是否默认展示签署日期， 在页面中可以进行修改。

- false 展示签署日期（默认）
- true 不展示签署日期 
![image](https://qcloudimg.tencent-cloud.cn/raw/448514412e2f69f6129425beda4ff568.png)。
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
        if (array_key_exists("HideDate",$param) and $param["HideDate"] !== null) {
            $this->HideDate = $param["HideDate"];
        }
    }
}
