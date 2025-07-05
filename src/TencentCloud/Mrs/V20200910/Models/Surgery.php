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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 手术记录
 *
 * @method SurgeryHistory getSurgeryHistory() 获取手术史
 * @method void setSurgeryHistory(SurgeryHistory $SurgeryHistory) 设置手术史
 * @method OtherInfo getOtherInfo() 获取其他信息
 * @method void setOtherInfo(OtherInfo $OtherInfo) 设置其他信息
 * @method integer getPage() 获取数据在原PDF文件中的第几页
 * @method void setPage(integer $Page) 设置数据在原PDF文件中的第几页
 */
class Surgery extends AbstractModel
{
    /**
     * @var SurgeryHistory 手术史
     */
    public $SurgeryHistory;

    /**
     * @var OtherInfo 其他信息
     */
    public $OtherInfo;

    /**
     * @var integer 数据在原PDF文件中的第几页
     */
    public $Page;

    /**
     * @param SurgeryHistory $SurgeryHistory 手术史
     * @param OtherInfo $OtherInfo 其他信息
     * @param integer $Page 数据在原PDF文件中的第几页
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
        if (array_key_exists("SurgeryHistory",$param) and $param["SurgeryHistory"] !== null) {
            $this->SurgeryHistory = new SurgeryHistory();
            $this->SurgeryHistory->deserialize($param["SurgeryHistory"]);
        }

        if (array_key_exists("OtherInfo",$param) and $param["OtherInfo"] !== null) {
            $this->OtherInfo = new OtherInfo();
            $this->OtherInfo->deserialize($param["OtherInfo"]);
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }
    }
}
