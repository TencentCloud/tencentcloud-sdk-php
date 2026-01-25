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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyZoneWorkMode请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method array getWorkModeInfos() 获取版本管理配置组工作模式。站点各配置模块可按照配置组维度开启「版本管理模式」或「即时生效模式」，详情请参考 [版本管理](https://cloud.tencent.com/document/product/1552/113690)。
 * @method void setWorkModeInfos(array $WorkModeInfos) 设置版本管理配置组工作模式。站点各配置模块可按照配置组维度开启「版本管理模式」或「即时生效模式」，详情请参考 [版本管理](https://cloud.tencent.com/document/product/1552/113690)。
 */
class ModifyZoneWorkModeRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var array 版本管理配置组工作模式。站点各配置模块可按照配置组维度开启「版本管理模式」或「即时生效模式」，详情请参考 [版本管理](https://cloud.tencent.com/document/product/1552/113690)。
     */
    public $WorkModeInfos;

    /**
     * @param string $ZoneId 站点 ID。
     * @param array $WorkModeInfos 版本管理配置组工作模式。站点各配置模块可按照配置组维度开启「版本管理模式」或「即时生效模式」，详情请参考 [版本管理](https://cloud.tencent.com/document/product/1552/113690)。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("WorkModeInfos",$param) and $param["WorkModeInfos"] !== null) {
            $this->WorkModeInfos = [];
            foreach ($param["WorkModeInfos"] as $key => $value){
                $obj = new ConfigGroupWorkModeInfo();
                $obj->deserialize($value);
                array_push($this->WorkModeInfos, $obj);
            }
        }
    }
}
