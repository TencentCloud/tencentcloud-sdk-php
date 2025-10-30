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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 健康处方
 *
 * @method string getTitle() 获取标题
 * @method void setTitle(string $Title) 设置标题
 * @method string getUrl() 获取健康处方链接
 * @method void setUrl(string $Url) 设置健康处方链接
 * @method string getKeyInformation() 获取关键信息
 * @method void setKeyInformation(string $KeyInformation) 设置关键信息
 */
class HealthPrescriptions extends AbstractModel
{
    /**
     * @var string 标题
     */
    public $Title;

    /**
     * @var string 健康处方链接
     */
    public $Url;

    /**
     * @var string 关键信息
     */
    public $KeyInformation;

    /**
     * @param string $Title 标题
     * @param string $Url 健康处方链接
     * @param string $KeyInformation 关键信息
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("KeyInformation",$param) and $param["KeyInformation"] !== null) {
            $this->KeyInformation = $param["KeyInformation"];
        }
    }
}
