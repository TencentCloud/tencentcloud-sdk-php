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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Excel转码相关参数
 *
 * @method integer getPaperSize() 获取表格转码纸张（画布）大小，默认为0。
0 -- A4
1 -- A2 
2 -- A0

注：当设置的值超出合法取值范围时，将采用默认值。
 * @method void setPaperSize(integer $PaperSize) 设置表格转码纸张（画布）大小，默认为0。
0 -- A4
1 -- A2 
2 -- A0

注：当设置的值超出合法取值范围时，将采用默认值。
 * @method integer getPaperDirection() 获取表格文件转换纸张方向，默认为0。
0 -- 代表垂直方向
非0 -- 代表水平方向
 * @method void setPaperDirection(integer $PaperDirection) 设置表格文件转换纸张方向，默认为0。
0 -- 代表垂直方向
非0 -- 代表水平方向
 */
class ExcelParam extends AbstractModel
{
    /**
     * @var integer 表格转码纸张（画布）大小，默认为0。
0 -- A4
1 -- A2 
2 -- A0

注：当设置的值超出合法取值范围时，将采用默认值。
     */
    public $PaperSize;

    /**
     * @var integer 表格文件转换纸张方向，默认为0。
0 -- 代表垂直方向
非0 -- 代表水平方向
     */
    public $PaperDirection;

    /**
     * @param integer $PaperSize 表格转码纸张（画布）大小，默认为0。
0 -- A4
1 -- A2 
2 -- A0

注：当设置的值超出合法取值范围时，将采用默认值。
     * @param integer $PaperDirection 表格文件转换纸张方向，默认为0。
0 -- 代表垂直方向
非0 -- 代表水平方向
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
        if (array_key_exists("PaperSize",$param) and $param["PaperSize"] !== null) {
            $this->PaperSize = $param["PaperSize"];
        }

        if (array_key_exists("PaperDirection",$param) and $param["PaperDirection"] !== null) {
            $this->PaperDirection = $param["PaperDirection"];
        }
    }
}
