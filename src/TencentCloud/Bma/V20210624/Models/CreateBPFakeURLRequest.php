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
namespace TencentCloud\Bma\V20210624\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBPFakeURL请求参数结构体
 *
 * @method integer getProtectURLId() 获取保护网址ID
 * @method void setProtectURLId(integer $ProtectURLId) 设置保护网址ID
 * @method string getFakeURL() 获取仿冒网址
 * @method void setFakeURL(string $FakeURL) 设置仿冒网址
 * @method array getSnapshotNames() 获取截图
 * @method void setSnapshotNames(array $SnapshotNames) 设置截图
 * @method string getNote() 获取举报说明
 * @method void setNote(string $Note) 设置举报说明
 */
class CreateBPFakeURLRequest extends AbstractModel
{
    /**
     * @var integer 保护网址ID
     */
    public $ProtectURLId;

    /**
     * @var string 仿冒网址
     */
    public $FakeURL;

    /**
     * @var array 截图
     */
    public $SnapshotNames;

    /**
     * @var string 举报说明
     */
    public $Note;

    /**
     * @param integer $ProtectURLId 保护网址ID
     * @param string $FakeURL 仿冒网址
     * @param array $SnapshotNames 截图
     * @param string $Note 举报说明
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
        if (array_key_exists("ProtectURLId",$param) and $param["ProtectURLId"] !== null) {
            $this->ProtectURLId = $param["ProtectURLId"];
        }

        if (array_key_exists("FakeURL",$param) and $param["FakeURL"] !== null) {
            $this->FakeURL = $param["FakeURL"];
        }

        if (array_key_exists("SnapshotNames",$param) and $param["SnapshotNames"] !== null) {
            $this->SnapshotNames = $param["SnapshotNames"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }
    }
}
