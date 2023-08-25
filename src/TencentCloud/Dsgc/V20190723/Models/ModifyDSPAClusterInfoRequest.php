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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDSPAClusterInfo请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID。
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID。
 * @method string getDspaName() 获取DSPA实例名。1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字。
 * @method void setDspaName(string $DspaName) 设置DSPA实例名。1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字。
 * @method string getDspaDescription() 获取DSPA实例描述信息。最长1024个字符。
 * @method void setDspaDescription(string $DspaDescription) 设置DSPA实例描述信息。最长1024个字符。
 */
class ModifyDSPAClusterInfoRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID。
     */
    public $DspaId;

    /**
     * @var string DSPA实例名。1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字。
     */
    public $DspaName;

    /**
     * @var string DSPA实例描述信息。最长1024个字符。
     */
    public $DspaDescription;

    /**
     * @param string $DspaId DSPA实例ID。
     * @param string $DspaName DSPA实例名。1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字。
     * @param string $DspaDescription DSPA实例描述信息。最长1024个字符。
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("DspaName",$param) and $param["DspaName"] !== null) {
            $this->DspaName = $param["DspaName"];
        }

        if (array_key_exists("DspaDescription",$param) and $param["DspaDescription"] !== null) {
            $this->DspaDescription = $param["DspaDescription"];
        }
    }
}
