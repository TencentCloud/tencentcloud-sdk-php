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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频处理的输入对象信息。
 *
 * @method string getType() 获取输入来源对象的类型，现在仅支持 COS。
 * @method void setType(string $Type) 设置输入来源对象的类型，现在仅支持 COS。
 * @method CosInputInfo getCosInputInfo() 获取当 Type 为 COS 时有效，则该项为必填，表示视频处理 COS 对象信息。
 * @method void setCosInputInfo(CosInputInfo $CosInputInfo) 设置当 Type 为 COS 时有效，则该项为必填，表示视频处理 COS 对象信息。
 */
class MediaInputInfo extends AbstractModel
{
    /**
     * @var string 输入来源对象的类型，现在仅支持 COS。
     */
    public $Type;

    /**
     * @var CosInputInfo 当 Type 为 COS 时有效，则该项为必填，表示视频处理 COS 对象信息。
     */
    public $CosInputInfo;

    /**
     * @param string $Type 输入来源对象的类型，现在仅支持 COS。
     * @param CosInputInfo $CosInputInfo 当 Type 为 COS 时有效，则该项为必填，表示视频处理 COS 对象信息。
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
        if (array_key_exists('Type',$param) and $param['Type'] !== null) {
            $this->Type = $param['Type'];
        }

        if (array_key_exists('CosInputInfo',$param) and $param['CosInputInfo'] !== null) {
            $this->CosInputInfo = new CosInputInfo();
            $this->CosInputInfo->deserialize($param['CosInputInfo']);
        }
    }
}
