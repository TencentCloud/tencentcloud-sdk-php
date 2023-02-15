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
namespace TencentCloud\Bma\V20221115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBPFakeURL请求参数结构体
 *
 * @method integer getCompanyId() 获取企业id
 * @method void setCompanyId(integer $CompanyId) 设置企业id
 * @method string getFakeURL() 获取仿冒网址
 * @method void setFakeURL(string $FakeURL) 设置仿冒网址
 * @method array getFakeURLSnapshots() 获取仿冒网址截图
 * @method void setFakeURLSnapshots(array $FakeURLSnapshots) 设置仿冒网址截图
 * @method string getNote() 获取备注
 * @method void setNote(string $Note) 设置备注
 */
class CreateBPFakeURLRequest extends AbstractModel
{
    /**
     * @var integer 企业id
     */
    public $CompanyId;

    /**
     * @var string 仿冒网址
     */
    public $FakeURL;

    /**
     * @var array 仿冒网址截图
     */
    public $FakeURLSnapshots;

    /**
     * @var string 备注
     */
    public $Note;

    /**
     * @param integer $CompanyId 企业id
     * @param string $FakeURL 仿冒网址
     * @param array $FakeURLSnapshots 仿冒网址截图
     * @param string $Note 备注
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
        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("FakeURL",$param) and $param["FakeURL"] !== null) {
            $this->FakeURL = $param["FakeURL"];
        }

        if (array_key_exists("FakeURLSnapshots",$param) and $param["FakeURLSnapshots"] !== null) {
            $this->FakeURLSnapshots = $param["FakeURLSnapshots"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }
    }
}
